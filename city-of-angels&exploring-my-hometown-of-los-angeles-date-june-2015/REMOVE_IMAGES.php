<?php
//www.pablofernandez.com
//THIS FILE DESIGNATES PHOTOS THE SERVER SHOULD REMOVE AND CATEGORIZE INTO DIFFERENT
//DIRECTORIES OR PRIVATE DIRECTORIES

$Removal_Photos =array(
"PF-172437668265-04172016-193438006984-8954.jpg",
"PF-749188226321-04172016-703965585120-1794.jpg",
"PF-628997428668-04172016-727280407445-6615.jpg",
"PF-970886667585-04172016-395610669860-9400.jpg"
);

foreach($Removal_Photos as $Current_Item) 
   {
   $File_Name = $Current_Item;

   if (file_exists("original/$File_Name")) {
     $File_Name = str_replace("original/", "", $File_Name);
     $File_Name = str_replace("large/", "", $File_Name);
     $File_Name = str_replace("thumbnails/", "", $File_Name);

       rename("large/$File_Name", "../non-published/large/" . $File_Name);    // Move Watermarked Version
       rename("original/$File_Name", "../non-published/original/" . $File_Name); // Move Original Version
       rename("thumbnails/$File_Name", "../non-published/thumbnails/" . $File_Name); // Move Small Version
       echo $File_Name . " File Removed Successfully.<br> ";
   }

   }

echo "File Completed. ";


