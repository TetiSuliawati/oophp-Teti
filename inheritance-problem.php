<?php 

// jualan prodk
// komik
// Game
class Produk {
	public $judul,
	 	   $penulis,
	 	   $penerbit,
	 	   $harga,
	 	   $jmlHalaman,
	 	   $waktuMain,
	 	   $tipe;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) { 
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;

	} 

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoLengkap() {

		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if( $this->tipe == "komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if($this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}
		return $str;
	}
}


class cetakinfoproduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1= new produk("Doraemon", "Teti Suliawati", "Martin", 30000, 100, 0, "komik");


$produk2 = new produk("Mobile Legends", "Iqbal Ramadhani", "Vanesa", 250000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
