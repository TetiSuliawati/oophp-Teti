<?php 

// jualan prodk
// komik
// Game
class Produk {
	public $judul = "judul",
	 	   $penulis  = "penulis",
	 	   $penerbit = "penerbit",
	 	   $harga = 0 ;

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}
}


$produk1= new produk();
$produk1->judul = "Doraemon";
$produk1->penulis = "Teti Suliawati";
$produk1->penerbit = "martin";
$produk1->harga = 30000;

$produk2 = new produk();
$produk2->judul = "Mobile legends";
$produk2->penulis = "Iqbal Ramadhani";
$produk2->penerbit = "vanesa";
$produk2->harga = 250000;

echo "komik :" . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
 ?>