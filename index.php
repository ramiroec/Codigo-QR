<?php
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
$qr = QrCode::create("https://site.com");
$writer = new PngWriter();
$writer->write($qr)->saveToFile("QR.PNG");
?>
