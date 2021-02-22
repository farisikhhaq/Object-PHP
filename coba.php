<?php 

class Produk{
    public $judul = "Faris",
           $penulis = "Ghani",
           $penerbit = "Oke",
           $harga = 5000;

    public function sayHello(){
        return "Hello World";
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk = new Produk();
$produk->judul = "Naruto";

echo "Komik: $produk->judul, $produk->harga";
echo "<br>";
echo $produk->sayHello();
echo $produk->getLabel();
?>