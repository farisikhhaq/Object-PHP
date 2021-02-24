<?php

interface infoProduk
{
    public function getInfoProduk();
}


abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit;
    protected $harga;
    protected $diskon;
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

    abstract public function getInfo();

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
}


class Komik extends Produk implements infoProduk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements infoProduk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = [];


    public function tambahproduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }



    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

//===============================================================================================================================================================================//
$produk1 = new Komik("Naruto", "Jack Mayhem", "Elex", 3000, 100);
$produk2 = new Game("MW3", "Jack Sulton", "Infinity Ward", 3000000, 50);


$cetakInfoProduk = new CetakInfoProduk();

$cetakInfoProduk->tambahproduk($produk1);
$cetakInfoProduk->tambahproduk($produk2);

echo $cetakInfoProduk->cetak();

// $tes = new Produk();














//     public function getInfoProduk()
//     {
//         $str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
//         return $str;
//     }
// }

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// echo "<br>";

// echo "Komik: $produk1->judul, $produk1->harga";
// echo "<br>";
// echo $produk1->sayHello();
// echo $produk1->getLabel();

// echo $produk1->getInfoProduk();
// echo "<br>";
// echo $produk2->getInfoProduk();
// echo "<hr>";

// $produk2->setDiskon(20);
// echo $produk2->getHarga();
// echo "<hr>";

// $produk1->setJudul("Fairs");
// echo $produk1->getJudul();
// echo "<br>";
// $produk1->setPenulis("JS");
// echo $produk1->getPenulis();
