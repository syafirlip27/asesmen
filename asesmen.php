<?php

class bilangan {

public $angka1;
protected $angka2;
private $angka3;

public function __construct($angka1, $angka2, $angka3){
    $this->angka1 = $angka1;
    $this->angka2 = $angka2;
    $this->angka3 = $angka3;
}
public function getAngka1(){
    return $this->angka1;
}
public function getAngka2(){
    return $this->angka2;
}
public function getAngka3(){
    return $this->angka3;
}

public function tambah(){
    return $this->angka1 + $this->angka2 + $this->angka3;
}
public function kurang(){
    return $this->angka1 - $this->angka2 - $this->angka3;
}
public function kali(){
    return $this->angka1 * $this->angka2 * $this->angka3;
}
public function bagi(){
    if($this->angka1 !=0 && $this->angka2 !=0){
        return $this->angka1 / $this->angka2;
    }else{
        return "pembagian tidak dijalankan karena ada salah satu angka yang anda masukan bernilai 0";
    }
  
}
}
$aritmatika = new bilangan(15,5,3);
echo "hasil dari pertambahan ". $aritmatika->getAngka1()." + ".$aritmatika->getAngka2()." + ".$aritmatika->getAngka3()." = ".$aritmatika->tambah()."</br>";
echo "hasil dari pengurangan  ". $aritmatika->getAngka1()." - ".$aritmatika->getAngka2()." - ".$aritmatika->getAngka3()." = ".$aritmatika->kurang()."</br>";
echo "hasil dari perkalian ". $aritmatika->getAngka1()." x ".$aritmatika->getAngka2()." x ".$aritmatika->getAngka3()." = ".$aritmatika->kali()."</br>";
echo "hasil dari pembagian ". $aritmatika->getAngka1()." / ".$aritmatika->getAngka2()." / ".$aritmatika->getAngka3()." = ".$aritmatika->bagi()."</br>";





?>