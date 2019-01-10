<?php 

// jualan prodk
// komik
// Game
class Produk {
	public $judul,
	 	   $penulis,
	 	   $penerbit,
	 	   $harga;
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}
}


$produk1= new produk("Doraemon","Teti Suliawati","Martin", 150000);


$produk2 = new produk("Mobile Legends","Iqbal Ramadhani","Vanesa", 300000);

$produk3 = new produk("Dragon Ball");

echo "komik :" . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);
 ?>