.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Users manual
------------

**1. Download the Extension**

**2. Go to “Extension Manager” of your TYPO3-Page and upload the
Extensionby clicking on the icon shown below:**

|img-6|

**3. Activate the Extension:**

|img-7|

**4. Include the Static TypoScript:**

|img-8|

**5. Create Sysfolder** Go to Page > Create new pages > Folder. Drag
“Folder” to your Pagetree. Rename that folder to e.g. “Slides”.

**6. Set storage PID** In that backend view scroll down to the
“Default storage PID” and change it in the ID of your Folder you
created in the Step 5. Go to Template > “Your Root-Page” > Constant
Editor. Choose “PLUGIN.TX\_OWLSLIDER” in the “Category” - Drop-down.
Now your should see the backend view where you can customize the
slider.

|img-9| You can find out the ID of the Folder by hovering the mouse
over it in the pagetree.

**7. Add Slider Items** Go to List > “Your storage folder” > Create
new record. Click on “owlSlider Item” to create an object. This object
contains one image (you'll have to upload) that will be rendered in
frontend and settings like settings like a link of that image
(optional), title of the image

**8. Place Slider-Plugin in Content** Switch to Page > “Page you want
to put the slider on” insert the Plugin by clicking on “Add a new
record at this place”

|img-10| After that switch to the tab “Plugins” and click on “General
Plugins” then switch to the tab “Plugin” once again. In the dropdown-
menu you'll see choose the “owlSlider” and click to save the record.

**8. Configure the Extension via TypoScript** Go to Template > “Your
Root-Page” > Constant Editor. Choose “PLUGIN.TX\_OWLSLIDER” in the
“Category” - Drop-down. Now your should see the backend view where you
can customize the slider.

**Important:**

**Set the amount of images and breakpoint for responsive and fixed
views.** ItemsMobile, itemCustom, itemsTablet, itemsDesktopSmall,
items and itemsDesktop


.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

   Faq/Index

