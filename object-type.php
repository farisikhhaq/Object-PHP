<?php 

class Produk{
    public $judul = "Faris",
           $penulis = "Ghani",
           $penerbit = "Oke",
           $harga = 5000;

    public function __construct($judul,$penulis,$penerbit,$harga)
    {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga =$harga;
    }


    public function sayHello(){
        return "Hello World";
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk{
    
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Jack Mayhem","Elex",3000);


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

echo "<br>";

echo "Komik: $produk1->judul, $produk1->harga";
echo "<br>";
echo $produk1->sayHello();
echo $produk1->getLabel();
?> 