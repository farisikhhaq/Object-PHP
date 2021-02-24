<?php 
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
