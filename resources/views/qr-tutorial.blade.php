<?php 

require_once 'qrlib.php';

$path = '\image';
$file = $path.uniqid().".png";
$text = "I don't wanna anymore";

QRcode::png($text, $file);

DB::table('qr_code')->insert([
	'instructie_id' => 1,
	'qr_code' => $file,
]);


?>
