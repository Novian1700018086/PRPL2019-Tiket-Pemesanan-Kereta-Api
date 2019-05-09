<?php include "koneksi.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$QueryString = "SELECT pemesanan.id_pesan, pemesanan.nama, pemesanan.usia FROM pemesanan WHERE pemesanan.id_pesan LIKE '%$key%'
or pemesanan.nama LIKE '%$key%' or pemesanan.usia LIKE '%$key%'";
    $SQL = mysqli_query($con,$QueryString); 
// header("location:index.php")
?>
<link rel="stylesheet" href="./assets/lib/materialize.min.css">
<script src="./assets/lib/jquery.js"></script>
<script src="./assets/lib/materialize.min.js"></script>
<table border="1">
		<tr>
			<th>ID Customor</th>
			<th>Nama</th>
			<th>Atas Nama</th>
            <th>Usia</th>
            <th>Nomor KK</th>
            <th>Nomor Hp</th>
            <th>Tanggal Pesan</th>

		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						<td>$data[id_customer]</td>
                        <td>$data[nama]</td>
                        <td>$data[atas_nama]</td>
                        <td>$data[usia]</td>
                        <td>$data[no_kk]</td>
                        <td>$data[no_hp]</td>
                        <td>$data[no_kk]</td>
                        <td>$data[tgl_pesan]</td>
                        
					</tr>
                ";
			}
		?>
	</table>
