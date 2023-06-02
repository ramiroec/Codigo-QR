A simple way to generate QR codes in PHP is to:

Use the QR Code library, an easy way is to use Composer to download it – composer require endroid/qr-code.
Next, use the library to generate the QR code.
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
$qr = QrCode::create("https://site.com");
$writer = new PngWriter();
$writer->write($qr)->saveToFile("QR.PNG");
