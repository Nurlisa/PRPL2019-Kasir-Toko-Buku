<?php 
include 'koneksi.php';
$QueryString = "SELECT * FROM transaksi";
$SQL = mysqli_query($connect,$QueryString); 
?>

<!DOCTYPE html>
<html>
<head>
<title> Tampil Data</title>
</head>

<style>
body {
    background-image: url("upil.jpg");
}
</style>

<body>
<center><br><br><br><br><br><br><br><br><br><br><br><br>
<form method="post" action="cariBKcoba2.php">
	<input type="text" name="cari">
	<input type="submit" name="kirim" value="cari">
	<a href="cetakhasilcoba2.php"><INPUT TYPE="button" value="Cetak" onclick="tekan()"></a>
</form>
<table border ="1">
	<tr>
		<th>NoFaktur</th>
		<th>kodeBuku</th>
		<th>judulBuku</th>
		<th>jumlahBuku</th>
		<th>hargaBuku</th>
		<th>subTotal</th>
		<th>bayar</th>
		<th>kembalian</th>
		<th>totalBayar</th>
	</tr>
<?php
foreach ($SQL as $yes){
	echo "
	<tr>
		<td>$yes[noFaktur]</td>
		<td>$yes[kodeBuku]</td>
		<td>$yes[judulBuku]</td>
		<td>$yes[jumlahBuku]</td>
		<td>$yes[hargaBuku]</td>
		<td>$yes[subTotal]</td>
		<td>$yes[bayar]</td>
		<td>$yes[kembalian]</td>
		<td>$yes[totalBayar]</td>
	</tr>
	";
}
?>
</table>
</body>
</html>
