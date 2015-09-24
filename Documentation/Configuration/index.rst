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


========================== ====================================================================== ============
Property                    Description                                                   	  Type
========================== ====================================================================== ============
items			    Set the maximum amount of items displayed 	   	 		  int+
itemsDesktop		    Preset the number of slides visible					  string
itemsDesktopSmall           As above                					 	  string
itemsTablet		    As above   								  string
itemsTabletSmall	    As above. Default value is disabled                     		  string
itemsMobile		    As above 							  	  string
itemCustom	            Add custom variations of items depending from the width 	  	  string
singleItem		    Display only one item.                      			  option
itemsScaleUp		    Option to not stretch items         	             		  option
slideSpeed		    Slide speed in milliseconds.                                  	  int+
paginationSpeed		    Pagination speed in milliseconds. 	       			  	  int+
rewindSpeed		    Rewind speed in milliseconds.       			  	  int+
autoPlay		    Change to any number.                				  string
stopOnHover		    Stop autoplay on mouse hover.                     			  option
navigation		    Display "next" and "prev" buttons.       			  	  option
navigationText	  	    You can customize your own text for navigation. 		   	  string
rewindNav		    Slide to first item. 					  	  option
scrollPerPage		    Scroll per page not per item. 				  	  option
pagination	   	    Show pagination.   						  	  option
paginationNumbers	    Pagination speed in milliseconds.         			  	  option	
responsive		    You can use owlSlider on desktop-only websites too! 	  	  option
responsiveRefreshrate	    time to check window width for responsive actions.		  	  int+
responsiveBaseWidth	    owlSlider checks window for browser width changes. 			  string
baseClass		    Automatically added class for base CSS styles. 			  string
theme			    Default Owl CSS styles for navigation and buttons. 			  string	  
lazyLoad		    Delays loading of images. 						  option
lazyFollow		    Skips loading 							  option
lazyEffect		    Default is fadeIn on 400ms speed.					  string
autoHeight		    Add height to owl-wrapper-outer 		 			  option
dragBeforeAnimFinish	    Ignore whether a transition is done or not				  option
mouseDrag	   	    Turn off/on mouse events.						  option 
touchDrag    		    Turn off/on touch events.					 	  option
addClassActive		    Add "active" classes on visible items. 				  option
transitionStyle		    Add CSS3 transition style.						  string
customNavigation	    Displays a custom navigation beyond the slider if true. 		  option
========================== ====================================================================== ============

.. _tsItems:

items
"""""""
.. container:: table-row

   Property
         items
   Data type
         int+
   Description
         This variable allows you to set the maximum amount of items displayed at a time with the widest browser width.

.. _tsItemsDesktop:

itemsDesktop
""""""""""""
.. container:: table-row

   Property
         itemsDesktop
   Data type
         string
   Description
         This allows you to preset the number of slides visible with a particular browser width. 
		 The format is [x,y] whereby x=browser width and y=number of slides displayed. 
		 For example [1199,4] means that if(window<=1199){ show 4 slides per page } 
		 Alternatively use itemsDesktop: false to override these settings.

.. _tsItemsDesktop:

itemsCustom
""""""""""""
.. container:: table-row

   Property
         itemsCustom
   Data type
         string
   Description
         This allows you to add custom variations of items depending from the width If this option is set, 
		 itemsDeskop, itemsDesktopSmall, itemsTablet, itemsMobile etc. are disabled For better preview, 
		 order the arrays by screen size, but it's not mandatory.
		 Don't forget to include the lowest available screen size, otherwise it will take the default one for screens lower than lowest available. 
		 Example: [[0, 2], [400, 4], [700, 6], [1000, 8], [1200, 10], [1600, 16]]

singleItems
""""""""""""
.. container:: table-row

   Property
         singleitems
   Data type
         option
   Description
         Display only one item.
		 
itemsScaleUp
""""""""""""
.. container:: table-row

   Property
         itemsScaleUp
   Data type
         option
   Description
         Option to not stretch items when it is less than the supplied items.		 

slideSpeed
""""""""""""
.. container:: table-row

   Property
         slideSpeed
   Data type
         int+
   Description
          Slide speed in milliseconds.
		  
paginationSpeed
"""""""""""""""""
.. container:: table-row

   Property
         paginationSpeed
   Data type
         int+
   Description
          Pagination speed in milliseconds.		

		  
rewindSpeed
"""""""""""""""""
.. container:: table-row

   Property
         rewindSpeed
   Data type
         int+
   Description
          Rewind speed in milliseconds.	

autoPlay
"""""""""""""""""
.. container:: table-row

   Property
         autoPlay
   Data type
         string
   Description
          Change to any number.
		  For example autoPlay : 5000 to play every 5 seconds.	
		
		
navigation
""""""""""""
.. container:: table-row

   Property
         navigation
   Data type
         option
   Description
          Display "next" and "prev" buttons.	
		  
navigationText
"""""""""""""""""
.. container:: table-row

   Property
         navigationText
   Data type
         string
   Description
          You can customize your own text for navigation. 
		  To get empty buttons use navigationText : false. Also HTML can be used here.	
		  
rewindNav
""""""""""""
.. container:: table-row

   Property
         rewindNav
   Data type
         option
   Description
          Slide to first item. Use rewindSpeed to change animation speed.	
		  
scrollPerPage
"""""""""""""""""
.. container:: table-row

   Property
         scrollPerPage
   Data type
         option
   Description
          Scroll per page not per item. This affect next/prev buttons and mouse/touch dragging.

pagination
"""""""""""
.. container:: table-row

   Property
         pagination
   Data type
         option
   Description
          Show pagination.		  
		  

paginationNumbers
""""""""""""""""""
.. container:: table-row

   Property
         paginationNumbers
   Data type
         option
   Description
          Show numbers inside pagination buttons.		  
		  
		  
responsive
"""""""""""
.. container:: table-row

   Property
         responsive
   Data type
         option
   Description
          You can use owlSlider on desktop-only websites too! 
		  Just change that to "false" to disable responsive capabilities		  
		
		
responsiveRefreshrate
"""""""""""""""""""""""
.. container:: table-row

   Property
         responsiveRefreshrate
   Data type
         int+
   Description
          200 to check window width changes every 200ms for responsive actions.		  

		  
responsiveBaseWidth
""""""""""""""""""""
.. container:: table-row

   Property
         responsiveBaseWidth
   Data type
         option
   Description
          owlSlider checks window for browser width changes. 
		  You can use any other jQuery element to check width changes for example ".owl-demo". 
		  Owl will change only if ".owl-demo" get new width.		  

baseClass
"""""""""""
.. container:: table-row

   Property
         baseClass
   Data type
         string
   Description
          Automatically added class for base CSS styles. Best not to change it if you don't need to.	  		  		  		  
		  
theme
"""""""""""
.. container:: table-row

   Property
         theme
   Data type
         string
   Description
          Default Owl CSS styles for navigation and buttons. Change it to match your own theme.		  
		  
lazyLoad
"""""""""""
.. container:: table-row

   Property
         lazyLoad
   Data type
         option
   Description
          Delays loading of images. Images outside of viewport won't be loaded before user scrolls to them. 
		  Great for mobile devices to speed up page loadings.		  
	
lazyFollow
"""""""""""
.. container:: table-row

   Property
         lazyFollow
   Data type
         option
   Description
          When pagination used, it skips loading the images from pages that got skipped. 
		  It only loads the images that get displayed in viewport. 
		  If set to false, all images get loaded when pagination used. 
		  It is a sub setting of the lazy load function.

lazyEffect
"""""""""""
.. container:: table-row

   Property
         lazyEffect
   Data type
         string
   Description
          Default is fadeIn on 400ms speed. Use 'false' to remove that effect.	

autoHeight
"""""""""""
.. container:: table-row

   Property
         autoHeight
   Data type
         option
   Description
          Add height to owl-wrapper-outer so you can use different heights on slides. 
		  Use it only for one item per page setting.	

		  
dragBeforeAnimFinish
"""""""""""""""""""""
.. container:: table-row

   Property
         dragBeforeAnimFinish
   Data type
         option
   Description
          Ignore whether a transition is done or not (only dragging).


mouseDrag
"""""""""""
.. container:: table-row

   Property
         mouseDrag
   Data type
         option
   Description
          Turn off/on mouse events.
		  
touchDrag
"""""""""""
.. container:: table-row

   Property
         touchDrag
   Data type
         option
   Description
          Turn off/on touch events.		  
		  
addClassActive
"""""""""""""""
.. container:: table-row

   Property
         addClassActive
   Data type
         option
   Description
          Add "active" classes on visible items. Works with any numbers of items on screen.	
	
	
transitionStyle
"""""""""""""""
.. container:: table-row

   Property
         transitionStyle
   Data type
         string
   Description
          Add CSS3 transition style. Works only with one item on screen.

		  
customNavigation
"""""""""""""""
.. container:: table-row

   Property
         transitionStyle
   Data type
         option
   Description
          Displays a custom navigation beyond the slider if true. 
		  Set false by default.


