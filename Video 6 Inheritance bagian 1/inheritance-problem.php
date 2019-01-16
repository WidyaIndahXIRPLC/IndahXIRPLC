<?php 


class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;



	public function __construct( $judul ="Aku dan Mereka", $penulis = "Iswanto", $penerbit = "Indah Widya Agustin", $harga = "0", $jmlHalaman = 0, $waktuMain = 0 , $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;

	}

	public function getLabel() {

		return " $this->penulis, $this->penerbit";
	}
 public function getInfoLengkap(){

 	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
 	if ($this->tipe == "komik") {
 		$str .= " - {$this->jmlHalaman} Halaman.";
 	} else if( $this->tipe == "Game" ) {
 		$str .= " ~ {$this->waktuMain} Jam.";
 	}
 	 return $str;
 }


}


class CetakInfoProduk {
public function cetak( produk $produk ) {
	$str = " {$produk->judul} | {$produk->getLabel()}, Indah Widya Agustin, Iswanto (Rp. {$produk->harga})";


	return $str;
}

}



$produk1 = new Produk("Kisah Cinta", "Wanto", "Indah", 56000,100,0, "komik");
$produk2 = new Produk("Kisah Cinta dia", "is", "widya", 60000,200,0, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


 ?>