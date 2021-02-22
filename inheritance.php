<?php 

class Produk{
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman,$waktuMain,$tipe)
    {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga =$harga;
       $this->jmlHalaman =$jmlHalaman;
       $this->waktuMain =$waktuMain;
       $this->tipe =$tipe;
    }


    public function sayHello(){
        return "Hello World";
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // $str = {"$this->tipe"} : {this->judul} | {this->label}
    }

}

class CetakInfoProduk{
    
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Jack Mayhem","Elex",3000,100,0,"Komik");
$produk2 = new Produk("MW3","Jack Sulton","Infinity Ward",3000000,0,50,"Game");


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// echo "<br>";

// echo "Komik: $produk1->judul, $produk1->harga";
// echo "<br>";
// echo $produk1->sayHello();
// echo $produk1->getLabel();
