<?php
?>

<html>
<head>
	<title>Input Transaksi Buku</title>
</head>
<?php
	if(isset($_POST['lihat'])){
		include 'koneksi.php';
		
		$noFaktur = $_POST['noFaktur'];
		$kodeBuku = $_POST['kodeBuku'];
		$judulBuku = $_POST['judulBuku'];
		$jumlahBuku = $_POST['jumlahBuku'];
		$hargaBuku = $_POST['hargaBuku'];
		$subTotal = $_POST['subTotal'];
		$bayar = $_POST['bayar'];
		$kembalian = $_POST['kembalian'];
		$totalBayar = $_POST['totalBayar'];
		
		$query = "insert into transaksi values ('$noFaktur','$kodeBuku','$judulBuku','$jumlahBuku','$hargaBuku','$subTotal','$bayar','$kembalian','$totalBayar')";
		$sql = mysqli_query($connect,$query);
		
		echo"INPUT BERHASIL<br>";
		echo "<a href='cetakcoba2.php'>Lihat Hasil</a>";
		echo "<br>";
		
		
	}
?>

<style>
body {
    background-image: url("upil.jpg");
}
</style>

<body>
<center><br><br><br><br><br><br><br><br><br>INPUT DATA TRANSAKSI
<form method="post" action="transaksicoba2.php">
	<table>
		<tr>
			<td>noFaktur</td>
			<td>:</td>
			<td><input type="text" name="noFaktur"></td>
		</tr>
		<tr>
			<td>kodeBuku</td>
			<td>:</td>
			<td><input type="text" name="kodeBuku"></td>
		</tr>
		<tr>
			<td>judulBuku</td>
			<td>:</td>
			<td><input type="text" name="judulBuku"></td>
		</tr>
		<tr>
			<td>jumlahBuku</td>
			<td>:</td>
			<td><input type="text" name="jumlahBuku"></td>
		</tr>
		<tr>
			<td>hargaBuku</td>
			<td>:</td>
			<td><input type="text" name="hargaBuku"></td>
		</tr>
		<tr>
			<td>subTotal</td>
			<td>:</td>
			<td><input type="text" name="subTotal"></td>
		</tr>
		<tr>
			<td>bayar</td>
			<td>:</td>
			<td><input type="text" name="bayar"></td>
		</tr>
		<tr>
			<td>kembalian</td>
			<td>:</td>
			<td><input type="text" name="kembalian"></td>
		</tr>
		<tr>
			<td>totalBayar</td>
			<td>:</td>
			<td><input type="text" name="totalBayar"></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<INPUT TYPE="reset" value="Ulang">
			<input type="submit" name="lihat" value="Lihat"></td>
		</tr>		
	</table>
</center>
</form>
</body>
</html>