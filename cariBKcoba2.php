<?php
include 'koneksi.php';
$key = $_POST['cari'];
echo " <br/> keyword pencarian = $key" ;
$QueryString = "SELECT * FROM transaksi WHERE judulBuku LIKE '$key%'";
$SQL = mysqli_query($connect, $QueryString);
if(mysqli_num_rows($SQL)>0){
	
	?>
	<center><br><br><br><br><br><br><br><br><br><br><br><br>
	<table border="1">
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
	<?php }
	else{
		echo "<br>DATA TIDAK DITEMUKAN";
	}
	?>
<style>
body {
    background-image: url("upil.jpg");
}
</style>
<html>
<head>
</head>
<body><br><br>
	<form method="post" action="cetakcoba2.php">
	<input type="submit" name="kirim" value="kembali">
</form>
</body>
</html>