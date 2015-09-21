.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. _introduction:

Configuration
=============

.. only:: html

	This chapter gives you a basic configuration about the TYPO3 CMS extension "*owl_slider*".




Reference
---------

plugin.tx\_easygooglemap properties: TS configuration.


Persistence
-----------


storagePid
^^^^^^^^^^

.. container:: table-row

   Property
         Property:
   Data type
         Data type:
   Description
         Define the sorting of displayed news records.
         The chapter ":ref:`Extend news > Extend flexforms <extendClasses>`" shows how the select box can be extended.

.. _tsOrderDirection:



.. container:: table-row

   Property
         storagePid
   Data type
         string
   Description
         PageId of page containing Location objects.

         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.persistence {
              storagePid = 4
            }
   


.. _tsOrderDirection:




.. container:: table-row

   Property
         storagePid
   
   Data type
         string
   
   Description
         PageId of page containing Location objects.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.persistence {
              storagePid = 4
            }
   
   Default


.. ###### END~OF~TABLE ######


Files and paths
---------------

tempalteRootPath
^^^^^^^^^^^^^^^^


.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         templateRootPath
   
   Data type
         string
   
   Description
         Path to template root directory.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.view {
              templateRootPath = fileadmin/templates/
            }
   
   Default

partialRootPath
^^^^^^^^^^^^^^^


.. container:: table-row

   Property
         partialRootPath
   
   Data type
         string
   
   Description
         Path to partials root directory.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.view {
              partialRootPath = fileadmin/partials/
            }
   
   Default

layoutRootPath
^^^^^^^^^^^^^^

.. container:: table-row

   Property
         layoutRootPath
   
   Data type
         string
   
   Description
         Path to template layouts.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.view {
              layoutRootPath = fileadmin/layouts/
            }
   
   Default



cssfile
^^^^^^^

.. container:: table-row

   Property
         cssfile
   
   Data type
         string
   
   Description
         Path to custom css file.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              cssfile = fileadmin/css/map.css
            }
   
   Default


includeJquery
^^^^^^^^^^^^^


.. container:: table-row

   Property
         includeJquery
   
   Data type
         boolean
   
   Description
         Enable or disable jQuery.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap {
              includeJquery = 1
            }
   
   Default


jQuery
^^^^^^

.. container:: table-row

   Property
         jquery
   
   Data type
         string
   
   Description
         Set jQuery source.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap {
              jquery = jquery-2.1.1.min.js
            }
   
   Default


.. ###### END~OF~TABLE ######


Map setup
---------


centerMapLatitude
^^^^^^^^^^^^^^^^^

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         centerMapLatitude
   
   Data type
         string
   
   Description

         Sets the initial latitude.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              centerMapLatitude = 47.6554401
            }
   
   Default


centerMapLongitude
^^^^^^^^^^^^^^^^^^


.. container:: table-row

   Property
         centerMapLongitude
   
   Data type
         string
   
   Description
         Sets the initial longitude.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              centerMapLongitude = 8.1758800
            }
   
   Default

fadeoutcats
^^^^^^^^^^^


.. container:: table-row

   Property
         fadeoutcats
   
   Data type
         string
   
   Description
         A comma-separated list of categories to fade out. All options
         available here: https://developers.google.com/maps/documentation/javas
         cript/reference#MapTypeStyleFeatureType.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              fadeoutcats = transit, poi.business
            }
   
   Default


zoom
^^^^

.. container:: table-row

   Property
         zoom
   
   Data type
         Int+
         
         [0 - 18]
   
   Description
         Initial map zoom level.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              zoom = 9
            }
   
   Default
         8


.. ###### END~OF~TABLE ######


Map styling
-----------

gamma
^^^^^

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         gamma
   
   Data type
         string
   
   Description
         Modifies the gamma by raising the lightness to the given power. Valid
         values: [0.01, 10], with 1.0 representing no change.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              gamma = 0.67
         
         **}**
   
   Default
         0.79

saturation
^^^^^^^^^^



.. container:: table-row

   Property
         saturation
   
   Data type
         int
         
         [-100 - 100]
   
   Description
         Shifts the saturation of colors by a percentage of the original value
         if decreasing and a percentage of the remaining value if increasing.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              saturation = 50
            }
   
   Default
         -98


.. ###### END~OF~TABLE ######


Dimensions and offset
---------------------

height
^^^^^^


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:
   
   Data type
         Data type:
   
   Description
         Description:
   
   Default
         Default:


.. container:: table-row

   Property
         height
   
   Data type
         string
   
   Description
         The height of the map.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              height = 400px
            }
   
   Default
         350px

width
^^^^^


.. container:: table-row

   Property
         width
   
   Data type
         string
   
   Description
         The width of the map.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              width = 900px
            }
   
   Default
         auto

anchorpositionx
^^^^^^^^^^^^^^^


.. container:: table-row

   Property
         anchorpositionx
   
   Data type
         int
   
   Description
         The horizontal position at which to anchor an image in correspondance
         to the location of the marker on the map.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              anchorpositionx = 20
            }
   
   Default

anchorpositiony
^^^^^^^^^^^^^^^


.. container:: table-row

   Property
         anchorpositiony
   
   Data type
         int
   
   Description
         The vertical position at which to anchor an image in correspondance to
         the location of the marker on the map.
         
         **Example:**
         
         ::
         
            plugin.tx_easygooglemap.configuration {
              anchorpositiony = 30
            }
   
   Default


.. ###### END~OF~TABLE ######

