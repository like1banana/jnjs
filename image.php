<?php
session_start();
header("content-type:png");
$srt="123456789qazwsxedcQAZWSXEDC";
$_SESSION['srt']=$srt[rand(0,26)].$srt[rand(0,26)].$srt[rand(0,26)].$srt[rand(0,26)];
$width=80;
$hight=40;
$image=imagecreate($width,$hight);
imagecolorallocate($image,255,255,255);
imagestring($image,10,40,20,$_SESSION['srt'],imagecolorallocate($image,0,0,0));
imagepng($image);
imagedestroy($image);
?>