<?php
require "./koneksi.php";

if(isset($_POST['tambah1']))
    mysqli_query($con, "insert into kereta values('{$_POST['no']}','{$_POST['asal']}','{$_POST['tujuan']}','{$_POST['kelas']}',
    '{$_POST['tanggal']}','{$_POST['waktu']}')");

else if(isset($_GET['hapus1']))
    $con->query("delete from kereta where no='{$_GET['hapus2']}'");

else if(isset($_POST['transaksi1'])) 
    mysqli_query($con, "insert into transaksi values('{$no}','{$_POST['asal']}','{$_POST['tujuan']}','{$_POST['kelas']}',
    '{$_POST['harga']}','{$_POST['jml_pesan']}','{$_POST['tot_bayar']}',
    '{$_POST['diskon']}','{$_POST['tot_setdiskon']}','{$_POST['bayar']}',
    '{$_POST['kembalian']}')");

header("location:indeks.php");
?>
<?php
require "./koneksi.php";
if(isset($_POST['tambah2']))
    mysqli_query($con, "insert into pemesanan values('{$_POST['id_pesan']}','{$_POST['nama']}','{$_POST['atas_nama']}','{$_POST['usia']}',
    '{$_POST['no_kk']}','{$_POST['no_hp']}','{$_POST['tgl_pesan']}','{$_POST['jml_penumpang']}')");

else if(isset($_GET['hapus2']))
    $con->query("delete from pemesanan where id_pesan='{$_GET['hapus2']}'");

else if(isset($_POST['transaksi2'])) 
    mysqli_query($con, "insert into transaksi values('{$no}','{$_POST['asal']}','{$_POST['tujuan']}','{$_POST['kelas']}',
    '{$_POST['harga']}','{$_POST['jml_pesan']}','{$_POST['tot_bayar']}',
    '{$_POST['diskon']}','{$_POST['tot_setdiskon']}','{$_POST['bayar']}',
    '{$_POST['kembalian']}')");

header2("location:indeks2.php");
?>