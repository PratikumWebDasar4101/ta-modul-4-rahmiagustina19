<?php
session_start();
$hargapengiriman;
$totalharga;
$tgl=date('d-m-Y');

$pengiriman = $_POST["pengiriman"];
$belanjaan 	= $_POST["belanjaan"];
$alamat 	= $_POST["alamat"];	

 echo "Tanggal Pembeliaan : $tgl <br><br>";
 echo "Alamat : $alamat";
 echo "<p>Barang yang dibeli</p>";

foreach ($belanjaan as $nilai) {
	echo "- $nilai <br />";
}

$totalBiaya = 0;

if ($pengiriman=="JNE") {
	$hargapengiriman = 10000;
}elseif ($pengiriman=="J&T") {
	$hargapengiriman = 12000;
}elseif ($pengiriman=="TiKi"){
	$hargapengiriman = 8000;
}


for ($i = 0; $i < count($belanjaan); $i++) { 
	if ($belanjaan[$i] == "TV") {
		$harga = 2000000;
	} elseif($belanjaan[$i] == "Mesin Cuci"){
		$harga = 3000000;
	} else {
		$harga = 500000;
	}
	
	$totalBiaya = $totalBiaya + $harga;
}
error_reporting(0);
echo "<br>Harga Pengiriman $pengiriman : Rp. ". number_format($hargapengiriman)."<br>";
$totalBiaya = $totalBiaya + $hargapengiriman;
$baris = count($_SESSION['daftarbelanja']);
$_SESSION['daftarbelanja'][$baris] = array(
	"belanjaan" => $belanjaan, "pengiriman" => $pengiriman, "alamat" => $alamat, "totalBiaya" => $totalBiaya
);
$daftarbelanjaan = $_SESSION['daftarbelanja'];
echo "<br>Total Harga = Rp." . number_format($daftarbelanjaan[0]['totalBiaya']);

?>
<br><br>
<a href="logout.php">Logout</a>