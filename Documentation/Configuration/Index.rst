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


=============
Configuration
=============

jQuery
^^^^^^

- To use Owl Carousel, you’ll need to make sure jQuery 1.7 or higher
  scripts is included. The Slider-Extension brings a jQuery 1.11.0 with.
  But if you have already jQuery running on your page, you can disable
  the one in the extension by unchecking the option in backend.
  
  |img-Configuation_Include|


- You can also include a new version of jQuery by uploading the jQuery-
  file to  **typo3conf/ext/owl\_slider/Resources/jquery/** Folder in
  your TYPO3-Project and changing the text shown below into the name of
  the new jQuery file.

  |img-Configuration_Source|


Custom navigation
^^^^^^^^^^^^^^^^^

You can replace this type of navigation:
  |img-Configuration_Nav01|

with this one:
  |img-Configuration_Nav02|

To do so you need to set  **customNavigation** true in the backend:
  |img-Configuration_CustNav|

.. note::
   Don't forget to disable standard  **navigation** . Otherwise you will
   have both navigations displayed on your page.


Adding content to an Image
^^^^^^^^^^^^^^^^^^^^^^^^^^

You can add some text to each sliding image by adding content in the
“Rich Text Editor” in backend-menu of every Item or just one or two
Items you want to upload:
  |img-Configuration_Content|

This content will be displayed beneath the slide you've chosen.


Items per Page
^^^^^^^^^^^^^^

In order to prevent Images of laying over each other or to be just cut
off because there is not enough space for all of them, you need to
specify the maximum amount of images that will be displayed on your
page by changing the following  **items** setting:
  |img-Configuration_Items|

For mobile Webpages that are being displayed on Smartphones and
Tablets as well , the settings  **itemsMobile** and  **itemsDestop**
should be specified if the default specifications don't fit.

e.g.
  |img-Configuration_ItemsMobil|


The format is [x,y] whereby x=browser width and y=number of slides
displayed.

