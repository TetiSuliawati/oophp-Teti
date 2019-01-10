<?php

require_once 'App/init.php';

$produk1= new komik("Doraemon","Teti Suliawati","Martin",30000, 100) ;


$produk2 = new Game("Mobile Legends","Iqbal Ramadhani","vanesa", 250000,50);

$cetakProduk = new cetakinfoproduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();

?>