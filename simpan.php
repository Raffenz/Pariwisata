<?php
include 'koneksi.php';
//Menyimpan data ke dalam variabel
$nama_pemesan = $_POST['nama_pemesan'];
$no_hp = $_POST['no_hp'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$paket_wisata = $_POST['paket_wisata'];
$waktu_pelaksanaan_perjalanan = $_POST['waktu_pelaksanaan_perjalanan'];
$akomodasi = $_POST['akomodasi'];
$transportasi = $_POST['transportasi'];
$servis_makanan = $_POST['servis_makanan'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$harga_paket_perjalanan = $_POST['harga_paket_perjalanan'];
$jumlah_tagihan = $_POST['jumlah_tagihan'];

//Query SQL untuk insert data
$query = "INSERT INTO paket_wisata SET nama_pemesan = '$nama_pemesan', no_hp = '$no_hp', tanggal_pesan='$tanggal_pesan', paket_wisata='$paket_wisata', waktu_pelaksanaan_perjalanan='$waktu_pelaksanaan_perjalanan', akomodasi='$akomodasi', transportasi='$transportasi', servis_makan='$servis_makan', jumlah_peserta='$jumlah_peserta', harga_paket_perjalanan='$harga_paket_perjalanan', jumlah_tagihan='jumlah_tagihan'";
mysqli_query($koneksi, $query);
//mengalihkan halaman
header("location:daftar_pesanan.php");
?>
