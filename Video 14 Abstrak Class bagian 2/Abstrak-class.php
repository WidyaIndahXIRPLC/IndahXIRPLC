<?php 


abstract class Produk {
	private  $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

	public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	

	}


	public function setJudul($judul) {
$this->judul = $judul;

	}
public function getJudul() {
	return $this->judul;
}
public function setpenulis($penulis){
	$this->penulis = $penulis;
}
public function getpenulis(){
	return $this->penulis;
}
public function setPenerbit($penerbit) {
	$this->penerbit = $penerbit;
}
public function getPenerbit(){
	return $this->penerbit;
}

public function setdiskon($diskon) {
 	$this->diskon = $diskon;
 }
public function getdiskon() {
	return $this->diskon;
}
public function setharga($harga) {
	$this->harga = $harga;
}
	public function getHarga(){
		return $this->harga - ( $this->harga * $this->diskon / 100);
	}


	public function getLabel() {

		return " $this->penulis, $this->penerbit";
	}
	abstract public function getInfoProduk();

 public function getInfo(){

 	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

 	 return $str;
 }


}


 class komik extends Produk {
 	public $jmlHalaman;


public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

parent::__construct( $judul, $penulis, $penerbit, $harga);
$this->jmlHalaman = $jmlHalaman;

}


public function getInfoProduk() {
$str = "komik : " . $this-> getInfo(). " -  {$this->jmlHalaman} Halaman.";
return $str;
}

 }


class Game extends Produk {
	public $waktuMain;

public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
	parent:: __construct( $judul, $penulis, $penerbit , $harga);
$this->waktuMain = $waktuMain;


}

	public function getInfoProduk() {
$str = "game : " . parent::getInfo() . "  ~ {$this->waktuMain} Jam.";
return $str;

	}
}

class CetakInfoProduk {
	
	public $daftarproduk = array();

	public function tambahproduk( produk $produk ) {
		$this->daftarproduk[] = $produk;
	}

	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach($this->daftarproduk as $p )
			$str .="-{$p->getInfoProduk()}<br>";

			return $str;
	}
}


$produk1 = new Komik ("Kisah Cinta", "Wanto", "Indah", 56000,100);
$produk2 = new Game ("Kisah Cinta dia", "is", "widya", 60000,200);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahproduk( $produk1);
$cetakProduk->tambahproduk( $produk2);
echo $CetakInfoProduk->cetak();

 ?>