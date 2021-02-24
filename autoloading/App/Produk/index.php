<?php 
require_once 'App/Produk/infoProduk.php';
require_once 'App/Produk/Produk.php';
require_once 'App/Produk/Komik.php';
require_once 'App/Produk/Game.php';
require_once 'App/Produk/CetakInfoProduk.php';

// require_once 'App\init.php';

// echo __DIR__ . 'App\init.php';

$produk1 = new Komik("Naruto", "Jack Mayhem", "Elex", 3000, 100);
$produk2 = new Game("MW3", "Jack Sulton", "Infinity Ward", 3000000, 50);


$cetakInfoProduk = new CetakInfoProduk();

$cetakInfoProduk->tambahproduk($produk1);
$cetakInfoProduk->tambahproduk($produk2);

echo $cetakInfoProduk->cetak();
?>