.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. _introduction:

Configuration
=============

	This chapter gives you a basic configuration about the TYPO3 CMS extension "*owl_slider*".


.. only:: html

   .. contents::
        :local:
        :depth: 1


Plugin settings
---------------
This section covers all settings, which can be defined in the plugin itself. To improve the usability,
only those settings are shown which are needed by the chosen view (The setting orderBy_ is for example not needed in the single view).

.. important:: Every setting can also be defined by TypoScript. However, please inform yourself about the setting overrideFlexformSettingsIfEmpty_.

Properties
^^^^^^^^^^

.. container:: ts-properties

	==================================== ================================================================================================================ ============== ===============
	Property                             Description                                                                                                      Sheet          Type
	==================================== ================================================================================================================ ============== ===============
	items                                This variable allows you to set the maximum amount of items displayed at a time with the widest browser width.                               General         string
	itemsDesktop                       	 This allows you to preset the number of slides visible with a particular browser width. The format is [x,y] whereby x=browser width and y=number of slides displayed. For example [1199,4] means that if(window<=1199){ show 4 slides per page } Alternatively use itemsDesktop: false to override these settings.          																			              General         string
	itemsDesktopSmall                    As above.                																			              General         string
	itemsTablet                          As above.                    General         string
	itemsTabletSmall                  	 As above. Default value is disabled.                         General         string
	itemsMobile                 		 As above.                 General         boolean
	itemCustom                   		 This allows you to add custom variations of items depending from the width If this option is set, itemsDeskop, itemsDesktopSmall, itemsTablet, itemsMobile etc. are disabled For better preview, order the arrays by screen size, but it's not mandatory Don't forget to include the lowest available screen size, otherwise it will take the default one for screens lower than lowest available. Example: [[0, 2], [400, 4], [700, 6], [1000, 8], [1200, 10], [1600, 16]]                               General         int
	singleItem                     		 Display only one item.                      General         string
	itemsScaleUp                  		 Option to not stretch items when it is less than the supplied items.                    General         string
	slideSpeed                  		 Slide speed in milliseconds.                              General         string
	paginationSpeed                      Pagination speed in milliseconds. 				General         string
	rewindSpeed                 		 Rewind speed in milliseconds.       General         string
	autoPlay                        	 Change to any number for example autoPlay : 5000 to play every 5 seconds.                     General         string
	stopOnHover                          Stop autoplay on mouse hover.                             General         int
	navigation                           Display "next" and "prev" buttons.        additional      int
	navigationText                       You can customize your own text for navigation. To get empty buttons use navigationText : false. Also HTML can be used here.               additional      int
	rewindNav                            Slide to first item. Use rewindSpeed to change animation speed.                   additional      int
	scrollPerPage                        Scroll per page not per item. This affect next/prev buttons and mouse/touch dragging.				additional      int
	pagination                           Show pagination.   	    additional      int
	paginationNumbers                 	 Pagination speed in milliseconds.                Tags                                  additional      string
	rewindSpeed                      	 Rewind speed in milliseconds.                   additional      boolean
	autoPlay         					 Change to any number for example autoPlay : 5000 to play every 5 seconds.                        additional      int
	stopOnHover                          Stop autoplay on mouse hover.                additional      boolean
	navigation          				 Display "next" and "prev" buttons.					additional      boolean
	navigationText                	 	 You can customize your own text for navigation. To get empty buttons use navigationText : false. Also HTML can be used here.               additional      boolean
	rewindNav                    		 Slide to first item. Use rewindSpeed to change animation speed.          template        int
	scrollPerPage                    	 Scroll per page not per item. This affect next/prev buttons and mouse/touch dragging. 			template        int
	pagination                    		 Show pagination.           template        int
	paginationNumbers                    Show numbers inside pagination buttons                       template        string
	responsive							 You can use owlSlider on desktop-only websites too! Just change that to "false" to disable responsive capabilities
	responsiveRefreshrate				 200 to check window width changes every 200ms for responsive actions.
	responsiveBaseWidth					 owlSlider checks window for browser width changes. You can use any other jQuery element to check width changes for example ".owl-demo". Owl will change only if ".owl-demo" get new width.
	baseClass							 Automatically added class for base CSS styles. Best not to change it if you don't need to.
	theme								 Default Owl CSS styles for navigation and buttons. Change it to match your own theme.
	lazyLoad							 Delays loading of images. Images outside of viewport won't be loaded before user scrolls to them. Great for mobile devices to speed up page loadings.
	lazyFollow							 When pagination used, it skips loading the images from pages that got skipped. It only loads the images that get displayed in viewport. If set to false, all images get loaded when pagination used. It is a sub setting of the lazy load function.
	lazyEffect							 Default is fadeIn on 400ms speed. Use 'false' to remove that effect.
	autoHeight							 Add height to owl-wrapper-outer so you can use different heights on slides. Use it only for one item per page setting.
	dragBeforeAnimFinish				 Ignore whether a transition is done or not (only dragging).
	mouseDrag 							 Turn off/on mouse events.
	touchDrag							 Turn off/on touch events.
	addClassActive						 Add "active" classes on visible items. Works with any numbers of items on screen.
	transitionStyle						 Add CSS3 transition style. Works only with one item on screen.
	customNavigation				     displays a custom navigation beyond the slider if true. Set false by default.
	==================================== ================================================================================================================ ============== ===============

.. _tsOrderBy:

items
"""""
.. container:: table-row

   Property
         items
   Data type
         int+
   Description
         This variable allows you to set the maximum amount of items displayed at a time with the widest browser width.

.. _tsOrderDirection:

itemsDesktop
""""""""""""
.. container:: table-row

   Property
         itemsDesktop
   Data type
         string
   Description
         This allows you to preset the number of slides visible with a particular browser width. The format is [x,y] whereby x=browser width and y=number of slides displayed. 
		 For example [1199,4] means that if(window<=1199){ show 4 slides per page } Alternatively use itemsDesktop: false to override these settings.

.. _tsDateField:

itemsDesktopSmall
"""""""""""""""""
.. container:: table-row

   Property
         itemsDesktopSmall
   Data type
         string
   Description
         As above

.. _tsCategories:

categories
""""""""""
.. container:: table-row

   Property
         categories
   Data type
         string
   Description
         Define the news categories which are taken into account when getting the correct news records.

         :typoscript:`plugin.tx_news.settings.categories =` 1,2,3

         .. caution::
         	Don't forget to set the category mode too! See property below.

.. _tsCategoryConjunction:

categoryConjunction
"""""""""""""""""""

.. container:: table-row

   Property
         categoryConjunction
   Data type
         string
   Description
         The category mode defines who selected categories are checked. 5 options are available:

         **1) Don't care, show all**

         There is no restriction based on categories, even if categories are defined.

         **2) Show items with selected categories (OR)**

         All news records which belong to at least one of the selected categories are shown.

         **3) Show items with selected categories (AND)**

         All news records which belong to  **all** selected categories are shown.

         **4) Do NOT show items with selected categories (OR)**

         This is the negation of #2. All news records which don't belong to any of the selected categories are shown.

         **5) Do NOT show items with selected categories (AND)**

         This is the negation of #3. All news records which don't belong to all selected categories are shown.

         :typoscript:`plugin.tx_news.settings.categoryConjunction =` or

.. _tsIncludeSubCategories:

includeSubCategories
""""""""""""""""""""
.. container:: table-row

   Property
         includeSubCategories
   Data type
         boolean
   Description
         Include subcategories in the category selection

         :typoscript:`plugin.tx_news.settings.includeSubCategories =1`

.. _tsArchiveRestriction:

archiveRestriction
""""""""""""""""""
.. container:: table-row

   Property
         archiveRestriction
   Data type
         string
   Description
         :typoscript:`plugin.tx_news.settings.archiveRestriction =1`

         News records can hold an optional archive date. 2 modes are available:

         **active: Only active (non archived)**

         All news records with an archive date before the current date are shown.

         **archived: Archived**

         All news records with an archive date in the past are shown.

         .. hint:: Records with no archive date aren't shown in any of the selected modes.

.. _tsTimeRestriction:

timeRestriction
"""""""""""""""

.. container:: table-row

   Property
         timeRestriction
   Data type
         string
   Description
         :typoscript:`plugin.tx_news.settings.timeRestriction =-1 week`

         The time limit offers 2 different options.

         **Time in seconds**

         Only news records with a maximum age (compared to the “Date & Time” field) are shown.

         Example: An input like “86400” shows only news records which are one day (60 seconds \* 60 minutes \* 24 hours) old.

         **Time in words**

         It is also possible to define the maximum age in words. Examples are:

         - -3 days
         - last Monday
         - -10 months 3 days 2 hours

         Words need to be in English and are translated by using `strtotime <http://de.php.net/strtotime>`_ .

.. _tsTimeRestrictionHigh:

timeRestrictionHigh
"""""""""""""""""""
.. container:: table-row

   Property
         timeRestrictionHigh
   Data type
         string
   Description
         See timeRestriction_ above. The configuration is the same but for the higher time end.

.. _tsTopNewsRestriction:

topNewsRestriction
""""""""""""""""""
.. container:: table-row

   Property
         topNewsRestriction
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.topNewsRestriction =2`

         Any news record can be set as “Top News”. Therefore it is possible to show news records depending on this flag.

         **1: Only Top News records**

         Only news records which the checkbox set are shown.

         **2: Except Top News records**

         Only news records which don't have the checkbox set are shown.

.. _tsSingleNews:

singleNews
""""""""""
.. container:: table-row

   Property
         singleNews
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.singleNews =789`

         It is possible to show a specific news record in the Detail view if the uid is set with this property.

.. _tsPreviewHiddenRecords:

previewHiddenRecords
""""""""""""""""""""
.. container:: table-row

   Property
         previewHiddenRecords
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.enablePreviewOfHiddenRecords =1`

         If set, also records which are normally hidden are displayed. This is especially helpful when using a detail view as preview mode for editors.

         .. note:: Be aware to secure the page (e.g. using a TS condition to make it available only if an BE user is logged in) as this page could be called by anyone using any news record uid to see its content.

.. _tsStartingpoint:

startingpoint
"""""""""""""
.. container:: table-row

   Property
         startingpoint
   Data type
         string
   Description
         :typoscript:`plugin.tx_news.settings.startingpoint =12,345`

         If a startingpoint is set, all news records which are saved on one of the selected pages are shown, otherwise news of all pages are shown.

.. _tsRecursive:

recursive
"""""""""
.. container:: table-row

   Property
         recursive
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.recursive = 2`

         The search for pages as startingpoint can be extended by setting a recursive level.

.. _tsDetailPid:

detailPid
"""""""""
.. container:: table-row

   Property
         detailPid
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.detailPid =12`

         This page is uses as target for the detail view. If nothing set, the current page is used.

         .. hint:: Be aware that this setting might not be used, depending on the setting detailPidDetermination_.

.. _tsListPid:

listPid
"""""""
.. container:: table-row

   Property
         listPid
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.listPid =12`

         This page is uses as target for the listings, e.g. the date menu and the Search form.

.. _tsBackPid:

backPid
"""""""
.. container:: table-row

   Property
         backPid
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.backPid =12`

         Define a page for the detail view to return to. This is typically the page on which the list view can be found.

.. _tsLimit:

limit
"""""
.. container:: table-row

   Property
         limit
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.limit =10`

         Define the maximum records shown.

.. _tsOffset:

offset
""""""
.. container:: table-row

   Property
         offset
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.offset =3`

         Define the offset. If set to e.g. 2, the first 2 records are not shown. This is especially useful in combination with multiple plugins on the same page and the setting “Max records displayed”.

.. _tsTags:

tags
""""
.. container:: table-row

   Property
         tags
   Data type
         string
   Description
         Add a constraint to the given tags

.. _tsHidePagination:

hidePagination
""""""""""""""
.. container:: table-row

   Property
         hidePagination
   Data type
         boolean
   Description
         If defined, the pagination is not shown.

.. _tsListPaginateItemsPerPage:

list.paginate.itemsPerPage
""""""""""""""""""""""""""
.. container:: table-row

   Property
         list.paginate.itemsPerPage
   Data type
         int
   Description
         Define the amount of news items shown per page in the pagination.

.. _tsTopNewsFirst:

topNewsFirst
""""""""""""
.. container:: table-row

   Property
         topNewsFirst
   Data type
         boolean
   Description
         :typoscript:`plugin.tx_news.settings.topNewsFirst =1`

         If set, news records with the checkbox **"Top News"** are shown before the others, no matter which sorting configuration is used.

.. _tsExcludeAlreadyDisplayedNews:

excludeAlreadyDisplayedNews
"""""""""""""""""""""""""""
.. container:: table-row

   Property
         excludeAlreadyDisplayedNews
   Data type
         boolean
   Description
         :typoscript:`plugin.tx_news.settings.excludeAlreadyDisplayedNews =1`

         If checked, news items which are already rendered are excluded in the current plugin. To exclude news items, the viewHelper <n:excludeDisplayedNews newsItem="{newsItem}" /> needs to be added to the template.
         .. note:: The order of rendering in the frontend is essential as the information which news record is shown and should not be included anymore is fetched during runtime.

.. _tsDisableOverrideDemand:

disableOverrideDemand
"""""""""""""""""""""
.. container:: table-row

   Property
         disableOverrideDemand
   Data type
         boolean
   Description
         :typoscript:`plugin.tx_news.settings.disableOverrideDemand =1`

         If set, the settings of the plugin can't be overridden by arguments in the URL. The override is used, e.g. to show only news of a given category (category given in the URL).

.. _tsMediaMaxWidth:

media.maxWidth
""""""""""""""
.. container:: table-row

   Property
         media.maxWidth
   Data type
         int
   Description
         Maximum width of assets

.. _tsMediaMaxHeight:

media.maxHeight
"""""""""""""""
.. container:: table-row

   Property
         media.maxHeight
   Data type
         int
   Description
         Maximum height of assets

.. _tsCropMaxCharacters:

cropMaxCharacters
"""""""""""""""""
.. container:: table-row

   Property
         cropMaxCharacters
   Data type
         int
   Description
         :typoscript:`plugin.tx_news.settings.cropMaxCharacters =100`

         Define the maximum length of the teaser text before it is cropped.

.. _tsTemplateLayout:

templateLayout
""""""""""""""
.. container:: table-row

   Property
         templateLayout
   Data type
         string
   Description
         :typoscript:`plugin.tx_news.settings.templateLayout = 123`

         Select different layouts. See :ref:`this section <tsconfigTemplateLayouts>` how to add layouts.

         .. note:: Template variants need to be supported by the templates, otherwise this setting doesn't change anything!

General settings
----------------

Any setting needs to be prefixed with  :typoscript:`plugin.tx_news.settings.`.

Properties
^^^^^^^^^^

.. container:: ts-properties

	==================================== ===============
	Property                             Type
	==================================== ===============
	cssFile_                              string
	format_                               string
	useStdWrap_                           string
	overrideFlexformSettingsIfEmpty_      string
	displayDummyIfNoMedia_                boolean
	detailPidDetermination_               string
	defaultDetailPid_                     integer
	orderByAllowed_                       string
	`analytics\.social`_                  array
	relatedFiles_                         array
	demandClass_                          string
	`link\.hrDate`_                       integer
	`link\.typesOpeningInNewWindow`_      string
	`link\.skipControllerAndAction`_      integer
	facebookLocale_                       string
	disqusLocale_                         string
	googlePlusLocale_                     string
	interfaces_                           array
	mediaRenderer_                        array
	opengraph_                            array
	`detail\.media`_                      array
	`detail\.errorHandling`_              string
	`detail\.checkPidOfNewsRecord`_       boolean
	`detail\.registerProperties`_         string
	`detail\.showSocialShareButtons`_     boolean
	`detail\.disqusShortname`_            string
	`list\.media`_                        array
	`list\.paginate`_                     array
	`list\.rss`_                          array
	`search\.fields`_                     string
	==================================== ===============

.. _tsCssFile:

cssFile
"""""""

.. container:: table-row

   Property
         cssFile
   Data type
         string
   Description
         Description of the property
   Default
         Default value (if any). Leave out entirely if not defined.

Path to the css file. This is included with the Layouts.

.. _tsFormat:

format
""""""

.. container:: table-row

   Property
         format
   Data type
         string
   Description
         Set a different format for the output. Use e.g. “xml” for RSS feeds.
   Default
         html

useStdWrap
""""""""""

.. container:: table-row

   Property
         useStdWrap
   Data type
         string
   Description
         Add all TypoScript properties as a comma separated list which need support for stdWrap.

         As an example: ::

			 settings {
			   useStdWrap = singleNews

			   singleNews.stdWrap.cObject = CONTENT
			   singleNews.stdWrap.cObject {
				...
			   }
			 }

   Default
         html

.. _tsOverrideFlexformSettingsIfEmpty:

overrideFlexformSettingsIfEmpty
"""""""""""""""""""""""""""""""

.. container:: table-row

   Property
         overrideFlexformSettingsIfEmpty
   Data type
         string
   Description
         The default behaviour of extbase is to override settings from
         TypoScript by the one of the flexforms. This is even valid if the setting is
         left empty in the flexforms.

         Therefore you can define those settings which's value should be taken from TypoScript if nothing
         is set in the plugin.
   Default
         cropMaxCharacters,dateField,timeRestriction,orderBy,orderDirection,backPid,listPid,startingpoint,recursive,list.paginate.itemsPerPage,list.paginate.templatePath

.. _tsDisplayDummyIfNoMedia:

displayDummyIfNoMedia
"""""""""""""""""""""

.. container:: table-row

   Property
         displayDummyIfNoMedia
   Data type
         boolean
   Description
         If set and no preview image is defined, a placeholder image is shown.
         The placeholder itself is defined with TypoScript ::

           plugin.tx_news.settings.list.media.dummyImage = typo3conf/ext/news/Resources/Public/Images/dummy-preview-image.png

   Default
         1

.. _tsDetailPidDetermination:

detailPidDetermination
""""""""""""""""""""""

.. container:: table-row

   Property
         overrideFlexformSettingsIfEmpty
   Data type
         string
   Description
         This settings defines which page is used for the link to the detail view.
         3 possible options are available which processed in the given order until a page has been found.

         - flexform
         - categories
         - default

         **flexform**

         This type tries to get the detail page from the plugin's setting *PageId for single news display* which
         can also be set by using TypoScript. ::

           # If set via TypoScript, also add detailPid to the setting "overrideFlexformSettingsIfEmpty"
           plugin.tx_news.settings.detailPid = 123

         **categories**

         A detail page can also be defined for every category. Use the field **Single-view page for news from this category** for that

         **default**

         This type tries to get the value from the setting *defaultDetailPid*. ::

           plugin.tx_news.settings.defaultDetailPid = 456

   Default
         flexform, categories, default

.. _tsDefaultDetailPid:

defaultDetailPid
""""""""""""""""

*See above*

.. _tsOrderByAllowed:

orderByAllowed
""""""""""""""
.. container:: table-row

   Property
         orderByAllowed
   Data type
         string
   Description
         Due to restrictions of extbase itself it is required to define all fields which are allowed for
         sorting results.

   Default
         sorting,author,uid,title,teaser,author,tstamp,crdate,datetime,categories.title

.. _tsAnalyticsSocial:

analytics.social
""""""""""""""""
.. container:: table-row

   Property
         analytics.social
   Data type
         array
   Description
         Use additional code for google analytics tracking of the social functionalities.

   Default
         ::

           analytics.social {
           	facebookLike = 1
           	facebookShare = 1
           	twitter = 1
           }

.. _tsRelatedFiles:

relatedFiles
""""""""""""
.. container:: table-row

   Property
         relatedFiles
   Data type
         array
   Description
         Configuration to render the related files. This is used in the ViewHelper :code:`n:format.fileDownload`.
   Default
         ::

           relatedFiles {
           	fileSizeLabels =
           	download {
           		labelStdWrap {
                      cObject = TEXT
           		}
           	}
           }

.. _tsDemandClass:

demandClass
"""""""""""
.. container:: table-row

   Property
         demandClass
   Data type
         string
   Description
         Overload the demand object which is used to build the queries.

         .. note::
           This is just important if you want to extend EXT:news. :ref:`See here <extendClasses>`

.. _tsLinkHrDate:

link.hrDate
"""""""""""

.. container:: table-row

   Property
         link.hrDate
   Data type
         boolean
   Description
         The url to a single news record contains only the uid of the record.
         Sometimes it is nice to have the date in url too (e.g.
         domain.tld/news/2011/8/news-title.html). If enabled, the date is added
         to the url.

         Each parameter (day, month, year) can be separately configured by using
         the full options of the `php function date()
         <http://at2.php.net/manual/en/function.date.php>`_ . This example will
         add the day as a number without leading zeros, the month with leading
         zeros and the year by using 4 digits. ::

            link {
                    hrDate = 1
                    hrDate {
                            day = j
                            month = m
                            year = Y
                    }
            }

         See the :ref:`realurl configuration <realurl>`.

   Default
         0

.. _tsLinkTypesOpeningInNewWindow:

link.typesOpeningInNewWindow
""""""""""""""""""""""""""""

.. container:: table-row

   Property
         link.typesOpeningInNewWindow
   Data type
         string
   Description
         Comma separated list of news types which open with target="_blank"
         Default is 2 which is the type "Link to external page"
   Default
         2

.. _tsLinkSkipControllerAndAction:

link.skipControllerAndAction
""""""""""""""""""""""""""""
.. container:: table-row

   Property
         link.skipControllerAndAction
   Data type
         boolean
   Description
         If set, the arguments *controller** and *action* are **not** added to the link.
   Default
         2

.. _tsFacebookLocale:

facebookLocale
""""""""""""""

.. container:: table-row

   Property
         facebookLocale
   Data type
         string
   Description
          Facebook locale which is used to translate facebook texts. Examples are de\_DE, fr\_FR, ...
   Default
         en\_US

.. _tsDisqusLocale:

disqusLocale
""""""""""""

.. container:: table-row

   Property
         disqusLocale
   Data type
         string
   Description
          Locale used for disqus
   Default
         en

.. _tsGooglePlusLocale:

googlePlusLocale
""""""""""""""""

.. container:: table-row

   Property
         googlePlusLocale
   Data type
         string
   Description
          Locale used for google+
   Default
         en

.. _tsInterfaces:

interfaces
""""""""""

.. container:: table-row

   Property
         interfaces
   Data type
         array
   Description
          Media types like youtube videos are rendered with custom media renderers.
          Those are registered in TypoScript with their class names and processed by order.
   Default
         ::

            interfaces {
           	media {
           		video = GeorgRinger\News\MediaRenderer\Audio\Mp3Html5,GeorgRinger\News\MediaRenderer\Audio\Mp3,GeorgRinger\News\MediaRenderer\Video\Quicktime,GeorgRinger\News\MediaRenderer\Video\File,GeorgRinger\News\MediaRenderer\Video\Youtube,GeorgRinger\News\MediaRenderer\Video\Vimeo,GeorgRinger\News\MediaRenderer\Video\Videosites
           	}
           	falMedia {
           		video = GeorgRinger\News\MediaRenderer\Video\Fal
           	}
           }


.. _tsMediaRenderer:

mediaRenderer
""""""""""

.. container:: table-row

   Property
         mediaRenderer
   Data type
         array
   Description
          Configuration of the various renderers (see configuration above). Currently only the renderer of Youtube videos uses those.
   Default
         ::

			mediaRenderer {
				youtube {
					# Add additional parameters to the URL used in the iframes.
					additionalParams =
				}
			}


.. _tsOpengraph:

opengraph
"""""""""

.. container:: table-row

   Property
         interfaces
   Data type
         array
   Description
          Additional open graph properties can be defined using TypoScript.
          Those are included in the the template partial :code:`EXT:news/Resources/Private/Partials/Detail/Opengraph.html`.

          The most important properties are filled automatically:

          - *og:title* is filled with the field **Alternative title** or if that is empty with the **Title**.
          - *og:description* is filled with the field **Description** or if that is empty with the **Teaser**.
          - *og:image* is filled with the first preview image.
          - *og:url* is filled with the current url.
   Default
         ::

		opengraph {
           site_name =  {$plugin.tx_news.opengraph.site_name}
           type = article
           admins =
           email =
           phone_number =
           fax_number =
           latitude =
           longitude =
           street-address =
           locality =
           region =
           postal-code =
           country-name =
		}

.. _tsDetailMedia:

detail.media
""""""""""""

.. container:: table-row

   Property
         detail.media
   Data type
         array
   Description
        Configuration for media elements in the detail view.

        .. attention::
           If you need different options like using **width** instead of **maxWidth** you need also
           to adopt the template files!

   Default
         ::

           detail.media {
           	image {
           		maxWidth = 282
           		maxHeight =

           		# Get lightbox settings from css_styled_content
           		lightbox {
                      enabled = {$styles.content.imgtext.linkWrap.lightboxEnabled}
                      class = {$styles.content.imgtext.linkWrap.lightboxCssClass}
                      width = {$styles.content.imgtext.linkWrap.width}
                      height = {$styles.content.imgtext.linkWrap.height}
                      rel = lightbox[myImageSet]
           		}
           	}

           	video {
           		width = 282
           		height = 300
           	}
           }

.. _tsDetailErrorHandling:

detail.errorHandling
""""""""""""""""""""
.. container:: table-row

   Property
         detail.errorHandling
   Data type
         string
   Description
         If no news entry is found, it is possible to use various types of error handling.

         - **redirectToListView**: This will redirect to the list view on the same page.
         - **redirectToPage**: Redirect to any page by using the syntax redirectToPage,<pageid>,<status>. This means e.g. redirectToPage,123,404 to redirect to the page with UID 123 and error code 404.
         - **pageNotFoundHandler**: The default page not found handler will be called.
   Default
         pageNotFoundHandler

.. _tsDetailCheckPidOfNewsRecord:

detail.checkPidOfNewsRecord
"""""""""""""""""""""""""""
.. container:: table-row

   Property
         detail.checkPidOfNewsRecord
   Data type
         boolean
   Description
         If set, the detail view checks the incoming news record against the defined starting point(s).
         If those don't match, the news record won't be displayed.
   Default
         0

.. _tsDetailRegisterProperties:

detail.registerProperties
"""""""""""""""""""""""""
.. container:: table-row

   Property
         detail.registerProperties
   Data type
         string
   Description
         Define a list of properties you want to be able to use via the TypoScript option *register*.

         ::

         	lib.fo = TEXT
         	lib.fo {
         		# title becomes newsTitle, keywords becomes newsKeywords, ...
         		data = newsTitle
         	}

         .. TODO Check that!

   Default
          keywords,title

.. _tsDetailShowSocialShareButtons:

detail.showSocialShareButtons
"""""""""""""""""""""""""""""
.. container:: table-row

   Property
         detail.showSocialShareButtons
   Data type
         boolean
   Description
         If set, the social share functionality is shown. This includes facebook, twitter, google+
   Default
         1

.. _tsDetailDisqusdisqusShortname:

detail.disqusShortname
""""""""""""""""""""""
.. container:: table-row

   Property
         detail.disqusShortname
   Data type
         string
   Description
         If set, the commenting system of disqus (www.disqus.com) is used with the given name.

.. _tsListMedia:

list.media
""""""""""

.. container:: table-row

   Property
         list.media
   Data type
         array
   Description
        Configuration for media elements in the list view.

        .. attention::
           If you need different options like using **width** instead of **maxWidth** you need also
           to adopt the template files!

   Default
         ::

		list.media {
           image {
           	maxWidth = 100
           	maxHeight = 100
           }
		}

.. _tsListPaginate:

list.paginate
"""""""""""""

.. container:: table-row

   Property
         list.paginate
   Data type
         array
   Description
         EXT:news uses a custom ViewHelper to render the pagination.

         The following settings are available:

         **itemsPerPage**

         Define how many items are shown on one page.

         **insertAbove**

         Set it to TRUE or FALSE to either show or hide the pagination before
         the actual news items.

         **insertBelow**

         Set it to TRUE or FALSE to either show or hide the pagination after
         the actual news items.

         **maximumNumberOfLinks**

         If set, not all pages of the pagination are shown but only the given amount. Imagine
         1000 news records and 10 items per page. This would result in 100
         links in the frontend.

         **prevNextHeaderTags**

         Add additional header tags <link rel="prev" href"" /> and
         <link rel="next" href"" /> to tell google about the pagination.
         Read more at http://googlewebmastercentral.blogspot.co.at/2011/09/pagination-with-relnext-and-relprev.html

         **templatePath**

         Set a custom template file for the paginate widget.
         The path has to point to the template file, for example :code:`EXT:foobar/Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html`

         .. important::
         	`list.paginate.templatePath` needs to be added to the setting `overrideFlexformSettingsIfEmpty`!


   Default
         ::

		list.paginate {
           itemsPerPage = 10
           insertAbove = 1
           insertBelow = 1
           templatePath =
           prevNextHeaderTags = 1
           maximumNumberOfLinks = 3
		}

.. _tsListRss:

list.rss
""""""""

.. container:: table-row

   Property
         list.rss
   Data type
         array
   Description
        Additional settings for the RSS view

        :ref:`See the RSS configuration <rss>`

   Default
         ::

		rss {
           channel {
           	title = {$plugin.tx_news.rss.channel.title}
           	description = {$plugin.tx_news.rss.channel.description}
           	language = {$plugin.tx_news.rss.channel.language}
           	copyright = {$plugin.tx_news.rss.channel.copyright}
           	generator = {$plugin.tx_news.rss.channel.generator}
           	link = {$plugin.tx_news.rss.channel.link}
           }
		}

.. _tsSearchFields:

search.fields
"""""""""""""

.. container:: table-row

   Property
         search.fields
   Data type
         string
   Description
        Comma separated list of fields which are used for the search.

        .. hint::
           You can also search in relations, e.g. the category title by using :code:`categories.title`

   Default
        teaser,title,bodytext

