<?php 


class Produk {
	public  $judul ="judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel() {

		return " $this->penulis, $this->penerbit";
	}

}


$produk3 = new Produk();
$produk3->judul = "Cinta Aku Kau dan Dia";
$produk3->penulis = "Indah Widya Agustin";
$produk3->penerbit = "Dia";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Aku dan Mereka";
$produk4->penulis = "Indah WA";
$produk4->penerbit = "I Widya A";
$produk4->harga = 55000;

echo "komik : " . $produk4->getLabel();
echo "<br>"; 
echo "Game : " . $produk4->getLabel();






 ?>