<?php
//header('Content-Type: image/jpeg');
ini_set('memory_limit', '-1');


 $files = glob("*.*");
 $counter = "0";
 for ($i=1; $i<count($files); $i++)
{

if($counter=="2") { } else {
$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
$counter ++;
if(($image=="Watermark.jpg") || ($image=="Watermark.png")) {} else {
?>
<?php
 $NEW_FILE_NAME_PART0="PF"; 
 $NEW_FILE_NAME_PART1=rand(100000000000,999999999999);
 $NEW_FILE_NAME_PART2=date(mdY);
 $NEW_FILE_NAME_PART3=rand(100000000000,999999999999);
 $NEW_FILE_NAME_PART4=rand(1000,9999);

$NAME_FILE = $NEW_FILE_NAME_PART0 . "-" . $NEW_FILE_NAME_PART1 . "-" . $NEW_FILE_NAME_PART2 . "-" . $NEW_FILE_NAME_PART3 . "-" . $NEW_FILE_NAME_PART4 . ".jpg";

$filename = $image;

if (strpos($filename, 'PF') !== false) {
// IMAGE HAS BEEN PROCESSED
}
else
{
rename($filename, 'original/'.$NAME_FILE);
$filename = "original/".$NAME_FILE;
$percent = 0.10;

list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

imagejpeg($image_p, null, 100);

if(!file_exists("thumbnails/" . $NAME_FILE)) {
 imagejpeg($image_p, "thumbnails/" . $NAME_FILE);
} else {
}
imagedestroy($image_p);

$filename = "original/".$NAME_FILE;
$percent = 0.35;

list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

$stamp = imagecreatefromjpeg('Watermark.jpg');

$marge_right = 20;
$marge_bottom = 20;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

imagecopy($image_p, $stamp,(imagesx($image_p)-$sx)/2, (imagesy($image_p)-$sy)/2, 0, 0, imagesx($stamp), imagesy($stamp));

  $text = "Copyright 2016, Pablo Fernandez. www.pablofernandez.com";
  $font_path = 'OpenSans-Semibold.ttf';
  $white = imagecolorallocate($image, 255, 255, 255);
  $marge_right = 450;
  $marge_bottom = 22;
  imagettftext($image_p, 9, 0, imagesx($image_p) - $marge_right, imagesy($image_p) - $marge_bottom, $white, $font_path, $text);

imagejpeg($image_p, null, 100);

if(!file_exists("large/" . $NAME_FILE)) {
 imagejpeg($image_p, "large/" . $NAME_FILE);
} else {
}
imagedestroy($image_p);
}

 }
?>
<?php
} else {
    continue;
 }


     }
// ***************

}
?>


