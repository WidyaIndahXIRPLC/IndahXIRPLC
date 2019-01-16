<?php 


class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;
	



	public function __construct( $judul ="Aku dan Mereka", $penulis = "Iswanto", $penerbit = "Indah Widya Agustin", $harga = "0", $jmlHalaman = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	

	}

	public function getLabel() {

		return " $this->penulis, $this->penerbit";
	}
 public function getInfoProduk(){

 	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

 	 return $str;
 }


}


 class komik extends Produk {
public function getInfoProduk() {
$str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) -  {$this->jmlHalaman} Halaman.";
return $str;
}

 }


class Game extends Produk {
	public function getInfoProduk() {
$str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
return $str;

	}
}





class CetakInfoProduk {
public function cetak( produk $produk ) {
	$str = " {$produk->judul} | {$produk->getLabel()}, Indah Widya Agustin, Iswanto (Rp. {$produk->harga})";


	return $str;
}

}



$produk1 = new Komik ("Kisah Cinta", "Wanto", "Indah", 56000,100,0);
$produk2 = new Game ("Kisah Cinta dia", "is", "widya", 60000,200,0);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


 ?>