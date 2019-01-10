<?php 

require_once 'App/init.php'; 

//$produk1= new komik("Doraemon", "Teti Suliawati", "Martin", 30000, 100);


//$produk2 = new Game("Mobile Legends", "Iqbal Ramadhani", "Vanesa", 250000,50 );

//$cetakProduk = new cetakinfoproduk();
//$cetakProduk->tambahProduk($produk1);
//$cetakProduk->tambahProduk($produk2);
//echo $cetakProduk->cetak();

//echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();





 ?>