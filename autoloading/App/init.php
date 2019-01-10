<?php


//require-once 'Produk/InfoProduk.phhp';
//require-once 'Produk/Produk.phhp';
//require-once 'Produk/Komik.phhp';
//require-once 'Produ/Game.phhp';
//require-once 'Produk/CetakInfoProduk.phhp';

spl_autoload_register(function( $class) {
	require_once __DIR__ . '/Produk/' . $class . '.php';
});

?>