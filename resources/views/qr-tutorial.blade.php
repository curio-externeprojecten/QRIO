<?php 

require_once 'phpqrcode/qrlib.php';

$path = 'image/';
$file = $path.uniqid().".png";
$text = "I don't wanna anymore";

QRcode::png($text, $file);


 ?>