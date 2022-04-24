<?php
class Book{

    private $code_book;
    private $qty;
    private $name;

    public function __construct($code_book, $name, $qty){
        $this->code_book = $code_book;
        $this->name = $name;
        $this->qty = $qty;
    }

    public function getBook(){
        if(preg_match("/^[A-Z]{2}[0-9]{2}$/", $this->code_book)){
            if($this->qty < 1){
                return "ERROR!!! Stok Buku Habis";
            }
            else{
                return
                "Kode Buku   : $this->code_book <br> Judul Buku : $this->name    <br> Stok   : $this->qty ";
            }
        }
        else{
            return "ERROR!!! Format Kode Buku Salah";
        }
    }

    private function getQty(){
        return $this->qty;
    }

    private function getCode(){
        return $this->code_book;
    }

}

$book_one = new Book('AB17', '100 Cara Mendapat Nilai Bagus di Praktikum PBW', 100);

echo $book_one->getBook();