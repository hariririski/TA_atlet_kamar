<?php
include "phpqrcode/qrlib.php"; 
//lanjutan yang tadi
 $tempdir="barcode/";
#parameter inputan
$isi_teks = "9865";
$namafile = "9865.png";
$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
$ukuran = 100; //batasan 1 paling kecil, 10 paling besar
$padding = 5;
 
QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);
 
 
 
?>