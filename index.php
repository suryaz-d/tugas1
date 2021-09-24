<?php


class Animal {
	public $jumlah_kaki, $bisa_terbang;
}


class Kucing {
	function bersuara(){
		return $this->suara;
	}
}
$bonny = new Kucing;
$bonny->jumlah_kaki = 4;
$bonny->bisa_terbang = "Tidak Bisa Terbang";
$bonny->suara = "Miauuu";

echo "Bonny Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$bonny->jumlah_kaki."<br>";
echo $bonny->bisa_terbang."<br>";
echo "Suaranya : ".$bonny->bersuara()."<br>";

echo "<hr>";


class Anjing {
	function bersuara(){
		return $this->suara;
	}
}
$doggy = new Anjing;
$doggy->jumlah_kaki = 4;
$doggy->bisa_terbang = "Tidak Bisa Terbang";
$doggy->suara = "Guk Guk";

echo "Doggy Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggy->jumlah_kaki."<br>";
echo $doggy->bisa_terbang."<br>";
echo "Suaranya : ".$doggy->bersuara();

echo "<hr>";


class  Elang{
	function bersuara(){
		return $this->suara;
	}
}
$alex = new Elang;
$alex->jumlah_kaki = 2;
$alex->bisa_terbang = "Bisa Terbang";
$alex->suara = "Miiiiip";

echo "Alex Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$alex->jumlah_kaki."<br>";
echo $alex->bisa_terbang."<br>";
echo "Suaranya : ".$alex->bersuara();

echo "<hr>";


class  Angsa{
	function bersuara(){
		return $this->suara;
	}
}

$swanny = new Angsa;
$swanny->jumlah_kaki = 2;
$swanny->bisa_terbang = "Bisa Terbang";
$swanny->suara = "Kwaaaak";

echo "Swanny Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$swanny->jumlah_kaki."<br>";
echo $swanny->bisa_terbang."<br>";
echo "Suaranya : ".$swanny->bersuara();

echo "<hr>";