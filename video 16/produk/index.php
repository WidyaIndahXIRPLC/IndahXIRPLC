<?php 


require_once 'App/Produk/Komik.php';
require_once 'App/Produk/.php';
require_once 'App/Produk/Komik.php';
require_once 'App/Produk/Game.php';
require_once 'App/Produk/CetakInfoProduk.php';

$produk1 = new Komik ("Kisah Cinta", "Wanto", "Indah", 56000,100);
$produk2 = new Game ("Kisah Cinta dia", "is", "widya", 60000,200);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahproduk( $produk1);
$cetakProduk->tambahproduk( $produk2);
echo $CetakInfoProduk->cetak();




 ?>