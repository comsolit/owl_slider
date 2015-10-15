.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.


============
Installation
============
This walkthrough will help you to implement the extension owl_slider at your TYPO3 site.


#. Download the extension

#. Go to **Extension Manager** of your TYPO3-Page and upload the Extension 

#. Activate the Extension

#. Include the Static TypoScript

    .. image:: ../Images/UserManual_TypoScript.png

     
#. **Add Slider Items** Create new record. 
   Click on “owlSlider Item” to create an object. This object contains one image 
   (you'll have to upload) that will be rendered in frontend and settings like settings 
   like a link of that image (optional), title of the image

   
#. **Place Slider-Plugin in Content** Switch to Page > “Page you want to put the slider on” insert the Plugin by clicking on “Add a new record at this place”   

#. **Configure the Extension via TypoScript** Go to Template > “Your Root-Page” > Constant Editor. Choose “PLUGIN.TX_OWLSLIDER” in the “Category” - Drop-down. Now your should see the backend view where you can customize the slider.   



.. note::
   After that switch to the tab “Plugins” and click on “General Plugins” then switch to the tab “Plugin” once again. 
   In the dropdown- menu you'll see choose the “owlSlider” and click to save the record.
   
   
.. important::
   **Set the amount of images and breakpoint for responsive and fixed views.** 
   ItemsMobile, itemCustom, itemsTablet, itemsDesktopSmall, items and itemsDesktop
   
   
   
   
