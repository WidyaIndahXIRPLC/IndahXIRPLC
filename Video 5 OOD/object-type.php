<?php 


class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga;



	public function __construct( $judul ="Aku dan Mereka", $penulis = "Iswanto", $penerbit = "Indah Widya Agustin", $harga = "0" ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {

		return " $this->penulis, $this->penerbit";
	}

}


class CetakInfoProduk {
public function cetak( produk $produk ) {
	$str = " {$produk->judul} | {$produk->getLabel()}, Indah Widya Agustin, Iswanto (Rp. {$produk->harga})";
	return $str;
}

}





$produk1 = new produk("Cinta kita","Indah dan dia","heember","43000");
$produk2 = new produk("Aku dan Dia","Terindah","hmbrr","65000");

echo "komik : " . $produk1->getLabel();
echo "<br>"; 
echo "Game : " . $produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);



 ?>