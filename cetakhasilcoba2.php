<?php 
include 'koneksi.php';
$tgl=date("Y-m-d");
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
		<center><br><br>
			<h2>KASIR TOKO BUKU AL-IKHLAS</h2>
			<h4>GONDOKUSUMAN 0247451982
			<br>JL. GAYAM NO. 20, RT. 02, RW. 01, BACIRO,
			<br>GONDOKUSUMAN, YOGYAKARTA, 5522</h4>
			<h4>..................................................................................................................................</h4>

<table border ="1">
	<tr>
		<th>judulBuku</th>
		<th>jumlahBuku</th>
		<th>hargaBuku</th>
		<th>subTotal</th>
		<th>bayar</th>
		<th>totalBayar</th>
	</tr>
</center>
<?php
foreach ($SQL as $yes){
	echo "
	<tr>
		<td>$yes[judulBuku]</td>
		<td>$yes[jumlahBuku]</td>
		<td>$yes[hargaBuku]</td>
		<td>$yes[subTotal]</td>
		<td>$yes[bayar]</td>
		<td>$yes[totalBayar]</td>
	</tr>
	";
}
?>

</table>
		<center>
			<br><br><br>
			<h4>LAYANAN KONSUMEN SMS 08111500208
			<br>CALL 1500 208 - KONTAK@KASIRTOKOBUKUAL-IKHLAS.CO.ID
			<br>INFO PROMO : ADD @KASIRTOKOBUKUAL-IKHLAS DI LINE
			<br>THANK YOU :)</h4>
			<a href="index.html"><INPUT TYPE="button" value="Kembali" onclick="tekan()"></a></form>

		</center>
		
<script>
	window.print();
</script>
		
</body>
</html>