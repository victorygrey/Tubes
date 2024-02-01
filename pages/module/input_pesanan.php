<?php
require_once '../connection/connection.php';
$nama_pelanggan = $_POST['nama_pemesan'];
$no_meja = $_POST['nomorMeja'];
$menu_pesanan = $_POST['coffee'];

$hitungan = mysqli_query($conn, 'SELECT max(id_pelanggan) as kodeTerbesar FROM pesanan');
$data = mysqli_fetch_array($hitungan);
$kodePelanggan = $data['kodeTerbesar'];

$id_pelanggan = (int) substr($kodePelanggan, 3, 3);

$id_pelanggan++;

if ($menu_pesanan == 'capucinno') {
    $id_pesanan = 1;
    $harga = 20000;
    $total = 20000;
} else if ($menu_pesanan == 'mochacinno') {
    $id_pesanan = 2;
    $harga = 25000;
    $total = 25000;
} else if ($menu_pesanan == 'espresso') {
    $id_pesanan = 3;
    $harga = 25000;
    $total = 25000;
} else {
    $id_pesanan = 4;
    $harga = 15000;
    $total = 15000;
}

if ($total > 20000) {
    $diskon = 5000;
    $bayar = $total - $diskon;
} else {
    $diskon = 0;
    $bayar = $total - $diskon;
}

$query = mysqli_query($conn, "INSERT into pesanan(id_pelanggan, nama_pelanggan, no_meja, id_menu, menu_pesanan, harga_pesanan)
    VALUES ('$id_pelanggan', '$nama_pelanggan', '$no_meja', '$id_pesanan','$menu_pesanan', '$harga')") or die(mysqli_error());

$query2 = mysqli_query($conn, "INSERT into transaksi(id_menu, menu_pesanan, harga_pesanan, jumlah_total, diskon, jumlah_bayar)
    VALUES ('$id_pesanan','$menu_pesanan','$harga','$total','$diskon','$bayar'") or die(mysqli_error());

if ($query && $query2) {
    ?>
    <script language="Javascript">
        document.location = '/Tubes/index.html';
    </script>
    <?php
}
?>