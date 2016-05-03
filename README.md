Photography Gallery
========
-Created by Pablo Fernandez.

This is a dynamically generated photo gallery that automatically resizes and adds watermarks to the photographers images after a RAW upload. The photos are sorted into different size folders and by image event and dates. Each is assigned a unique id to assist in identifying the image and for enabling photo licensing. Each photo sub-gallery is randomly generated with a combination of all related photos, and features a built-in cart function for photo licensing. 

Additionally, a photo "unpublisher" function is available which will take the problem image (ex. bad photo, corruped file, not wanted) and remove it from all locations it was saved from. It will take the file offline but preserve the original copy for future use. 

Check out my live demo here: http://pablofernandez.com/photography

User Guide
-----------
GENERATE_ALBUM_DYNAMICALLY.php - Included in all sub-galleries, this file randomly generates a photo gallery based on the files in the directory, and creates a next album and previous album choice. 

view_cart.php - Cart for the photo licensing

checkout.php - PayPal API integrated for photo licensing. 

-directory-/PROCESS_IMAGE.php - Processes added photos in the directory and sizes, adds watermarks, and sorts the photographs. 

-directory-/REMOVE_IMAGES.php - An Array of image IDs to be removed. 

Example Sub-Galleries
-----------

track-day&ridge-motorsports-park-date-october-2015-hooked-on-driving-event city-of-angels&exploring-my-hometown-of-los-angeles-date-june-2015


Contributions
-------------
Improvements to the photo gallery are welcome. I am open to suggestions to improve the efficiency of the code or add additional functionality. 
