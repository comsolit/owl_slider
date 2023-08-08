<?php

namespace Comsolit\OwlSlider\Updates;

use Doctrine\DBAL\DBALException;
use Exception;
use InvalidArgumentException;
use PDO;
use RuntimeException;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\Expression\ExpressionBuilder;
use TYPO3\CMS\Core\Log\Logger;
use TYPO3\CMS\Core\Log\LogManager;
use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\ResourceStorage;
use TYPO3\CMS\Core\Resource\StorageRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Updates\DatabaseUpdatedPrerequisite;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;

class ItemImageUpdateWizard implements UpgradeWizardInterface
{
    /**
     * @var string
     */
    protected $identifier = 'owlSliderItemImage';

    /**
     * @var string
     */
    protected $title = 'FAL Migration for owlslider images';

    /**
     * @var string
     */
    protected $description = 'Migrate all file relations from tx_owlslider_domain_model_item.itemimage to sys_file_references';

    /**
     * @var ResourceStorage
     */
    protected $storage;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * Table to migrate records from
     *
     * @var string
     */
    protected $table = 'tx_owlslider_domain_model_item';

    /**
     * Table field holding the migration to be
     *
     * @var string
     */
    protected $fieldToMigrate = 'itemimage';

    /**
     * the source file resides here
     *
     * @var string
     */
    protected $sourcePath = 'uploads/tx_owlslider/';

    /**
     * target folder after migration
     * Relative to fileadmin
     *
     * @var string
     */
    protected $targetPath = '_migrated/tx_owlslider/';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
    }

    /**
     * Get records from table where the field to migrate is not empty (NOT NULL and != '')
     * and also not numeric (which means that it is migrated)
     *
     * @return array
     * @throws RuntimeException
     */
    protected function getRecordsFromTable(): array
    {
        $connectionPool = GeneralUtility::makeInstance(ConnectionPool::class);
        $queryBuilder = $connectionPool->getQueryBuilderForTable($this->table);
        $queryBuilder->getRestrictions()->removeAll();

        try {
            $result = $queryBuilder
                ->select('uid', 'pid', $this->fieldToMigrate)
                ->from($this->table)
                ->where(
                    $queryBuilder->expr()->isNotNull($this->fieldToMigrate),
                    $queryBuilder->expr()->neq(
                        $this->fieldToMigrate,
                        $queryBuilder->createNamedParameter('')
                    ),
                    $queryBuilder->expr()->comparison(
                        'CAST(CAST(' . $queryBuilder->quoteIdentifier($this->fieldToMigrate) . ' AS DECIMAL) AS CHAR)',
                        ExpressionBuilder::NEQ,
                        'CAST(' . $queryBuilder->quoteIdentifier($this->fieldToMigrate) . ' AS CHAR)'
                    )
                )
                ->orderBy('uid')
                ->execute();

            return $result->fetchAll();
        } catch (DBALException $e) {
            throw new RuntimeException(
                'Database query failed. Error was: ' . $e->getPrevious()->getMessage(),
                1511950673
            );
        }
    }

    /**
     * Migrates a single field.
     *
     * @param array $row
     * @param string $customMessage
     *
     * @throws Exception
     */
    protected function migrateField(array $row, string &$customMessage)
    {
        $fieldItems = GeneralUtility::trimExplode(',', $row[$this->fieldToMigrate], true);
        if (empty($fieldItems) || is_numeric($row[$this->fieldToMigrate])) {
            return;
        }
        $fileadminDirectory = rtrim($GLOBALS['TYPO3_CONF_VARS']['BE']['fileadminDir'], '/') . '/';
        $i = 0;

        $storageUid = $this->storage->getUid();
        $connectionPool = GeneralUtility::makeInstance(ConnectionPool::class);

        foreach ($fieldItems as $item) {
            $fileUid = null;
            $sourcePath = Environment::getPublicPath() . '/' . $this->sourcePath . $item;
            $targetDirectory = Environment::getPublicPath() . '/' . $fileadminDirectory . $this->targetPath;
            $targetPath = $targetDirectory . basename($item);

            // maybe the file was already moved, so check if the original file still exists
            if (file_exists($sourcePath)) {
                if (!is_dir($targetDirectory)) {
                    GeneralUtility::mkdir_deep($targetDirectory);
                }

                // see if the file already exists in the storage
                $fileSha1 = sha1_file($sourcePath);

                $queryBuilder = $connectionPool->getQueryBuilderForTable('sys_file');
                $queryBuilder->getRestrictions()->removeAll();
                $existingFileRecord = $queryBuilder->select('uid')->from('sys_file')->where(
                    $queryBuilder->expr()->eq(
                        'sha1',
                        $queryBuilder->createNamedParameter($fileSha1)
                    ),
                    $queryBuilder->expr()->eq(
                        'storage',
                        $queryBuilder->createNamedParameter($storageUid, PDO::PARAM_INT)
                    )
                )->execute()->fetch();

                // the file exists, the file does not have to be moved again
                if (is_array($existingFileRecord)) {
                    $fileUid = $existingFileRecord['uid'];
                } else {
                    // just move the file (no duplicate)
                    rename($sourcePath, $targetPath);
                }
            }

            if ($fileUid === null) {
                // get the File object if it hasn't been fetched before
                try {
                    // if the source file does not exist, we should just continue, but leave a message in the docs;
                    // ideally, the user would be informed after the update as well.
                    /** @var File $file */
                    $file = $this->storage->getFile($this->targetPath . $item);
                    $fileUid = $file->getUid();
                } catch (InvalidArgumentException $e) {

                    // no file found, no reference can be set
                    $this->logger->notice(
                        'File ' . $this->sourcePath . $item . ' does not exist. Reference was not migrated.',
                        [
                            'table' => $this->table,
                            'record' => $row,
                            'field' => $this->fieldToMigrate,
                        ]
                    );

                    $format = 'File \'%s\' does not exist. Referencing field: %s.%d.%s. The reference was not migrated.';

                    $message = sprintf(
                        $format,
                        $this->sourcePath . $item,
                        $this->table,
                        $row['uid'],
                        $this->fieldToMigrate
                    );
                    $customMessage .= PHP_EOL . $message;
                    continue;
                }
            }


            if ($fileUid > 0) {
                $fields = [
                    'fieldname' => $this->fieldToMigrate,
                    'table_local' => 'sys_file',
                    'pid' => ($this->table === 'pages' ? $row['uid'] : $row['pid']),
                    'uid_foreign' => $row['uid'],
                    'uid_local' => $fileUid,
                    'tablenames' => $this->table,
                    'crdate' => time(),
                    'tstamp' => time()
                ];

                $queryBuilder = $connectionPool->getQueryBuilderForTable('sys_file_reference');
                $queryBuilder->insert('sys_file_reference')->values($fields)->execute();
                ++$i;
            }
        }

        // Update referencing table's original field to now contain the count of references,
        // but only if all new references could be set
        if ($i === count($fieldItems)) {
            $queryBuilder = $connectionPool->getQueryBuilderForTable($this->table);
            $queryBuilder->update($this->table)->where(
                $queryBuilder->expr()->eq(
                    'uid',
                    $queryBuilder->createNamedParameter($row['uid'], PDO::PARAM_INT)
                )
            )->set($this->fieldToMigrate, $i)->execute();

        }
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @throws Exception
     */
    public function executeUpdate(): bool
    {
        // storage with uid 1 is hopefully the fileadmin storage
        $this->storage = GeneralUtility::makeInstance(StorageRepository::class)->findByUid(1);

        $customMessage = '';
        $records = $this->getRecordsFromTable();
        foreach ($records as $record) {
            $this->migrateField($record, $customMessage);
        }
        return true;
    }

    public function updateNecessary(): bool
    {
        $records = $this->getRecordsFromTable();
        if (empty($records)) {
            return false;
        }
        return true;
    }

    public function getPrerequisites(): array
    {
        return [
            DatabaseUpdatedPrerequisite::class
        ];
    }
}