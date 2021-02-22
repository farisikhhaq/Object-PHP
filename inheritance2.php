<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }


    public function sayHello()
    {
        return "Hello World";
    }
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;

    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;

    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{

    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Jack Mayhem", "Elex", 3000, 100, 0);
$produk2 = new Game("MW3", "Jack Sulton", "Infinity Ward", 3000000, 0, 50);


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// echo "<br>";

// echo "Komik: $produk1->judul, $produk1->harga";
// echo "<br>";
// echo $produk1->sayHello();
// echo $produk1->getLabel();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
