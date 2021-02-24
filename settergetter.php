<?php

class Produk
{
    private $judul,
        $penulis,
        $penerbit;
    private $harga;
    private $diskon;
    // protected $harga;
 
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        /*    if( !is_string($judul)){
            throw new Exception("Judul Harus String");
        } */
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return  $this->judul;
    }


    public function setPenulis($penulis)
    {
        /*    if( !is_string($judul)){
               throw new Exception("Judul Harus String");
           } */
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return  $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        /*    if( !is_string($judul)){
               throw new Exception("Judul Harus String");
           } */
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return  $this->penerbit;
    }

    public function setHarga($harga)
    {
        /*    if( !is_string($judul)){
               throw new Exception("Judul Harus String");
           } */
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
}


class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

//     public function getInfoProduk()
//     {
//         $str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
//         return $str;
//     }
// }

class CetakInfoProduk
{

    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Jack Mayhem", "Elex", 3000, 100);
$produk2 = new Game("MW3", "Jack Sulton", "Infinity Ward", 3000000, 50);


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
echo "<hr>";

$produk2->setDiskon(20);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("Fairs");
echo $produk1->getJudul();
echo "<br>";
$produk1->setPenulis("JS");
echo $produk1->getPenulis();