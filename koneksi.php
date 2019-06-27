<?php

$connect= new mysqli("localhost","root","","kasir_toko_buku");
	
if($connect){
echo "Koneksi berhasil";
}else{
echo "Gagal Terkoneksi";
}
?>