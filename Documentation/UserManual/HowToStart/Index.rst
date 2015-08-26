.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt

.. _howToStart:

============
How to start
============

This walkthrough will help you to implement the extension owl_slider at your
TYPO3 site.


#. Download the extension


#. Go to **Extension Manager** of your TYPO3-Page and upload the Extensionby clicking on the icon shown below:
   |img-UserManual_ExtManager|
   

#. Activate the Extension:
   |img-UserManual_Search|


#. Include the Static TypoScript:
   |img-UserManual_TypoScript|

   
#. **Create Sysfolder** Go to Page > Create new pages > Folder. Drag “Folder” to your Pagetree. Rename that folder to e.g. “Slides”.


#. **Set storage PID** In that backend view scroll down to the “Default storage PID” and 
   change it in the ID of your Folder you created in the Step 5.
   Go to Template > “Your Root-Page” > Constant Editor. 
   Choose “PLUGIN.TX_OWLSLIDER” in the “Category” - Drop-down. 
   Now your should see the backend view where you can customize the slider.
   |img-UserManual_PID|

.. tip::
   You can find out the ID of the Folder by hovering the mouse over it in the pagetree.   
   
  
#. **Add Slider Items** Go to List > “Your storage folder” > Create new record. 
   Click on “owlSlider Item” to create an object. This object contains one image 
   (you'll have to upload) that will be rendered in frontend and settings like settings 
   like a link of that image (optional), title of the image

   
#. **Place Slider-Plugin in Content** Switch to Page > “Page you want to put the slider on” insert the Plugin by clicking on “Add a new record at this place”   
   |img-UserManual_Add|


.. note::
   After that switch to the tab “Plugins” and click on “General Plugins” then switch to the tab “Plugin” once again. 
   In the dropdown- menu you'll see choose the “owlSlider” and click to save the record.
   
   
#. **Configure the Extension via TypoScript** Go to Template > “Your Root-Page” > Constant Editor. Choose “PLUGIN.TX_OWLSLIDER” in the “Category” - Drop-down. Now your should see the backend view where you can customize the slider.   
   
.. important::
   **Set the amount of images and breakpoint for responsive and fixed views.** ItemsMobile, itemCustom, itemsTablet, itemsDesktopSmall, items and itemsDesktop
   
   
   
   