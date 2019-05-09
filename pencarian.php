<?php include "koneksi.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$QueryString = "SELECT kereta.origin, kereta.destination, kereta.kelas, kereta.Waktu FROM kereta WHERE kereta.origin LIKE '%$key%'
or kereta.destination LIKE '%$key%' or kereta.kelas LIKE '%$key%' or kereta.Waktu LIKE '%$key%'";
    $SQL = mysqli_query($con,$QueryString); 
header("location:indeks.php")
?>
<link rel="stylesheet" href="./assets/lib/materialize.min.css">
<script src="./assets/lib/jquery.js"></script>
<script src="./assets/lib/materialize.min.js"></script>
<table border="1">
		<tr>
                <th>Origin</th>
                <th>Destination</th>
                <th>Kelas</th>
                <th>Waktu</th>
		</tr>
		<?php
			$SQL =mysqli_query($con,"select * from kereta");
			$i=1;
			while ($data=mysqli_fetch_array($SQL) and extract($data)) { ?>
            <tr>
                <td>
                    <?=$i++ ?>
                </td>
                <td>
                    <?=$origin?>
                </td>
                <td>
                    <?=$destination?>
                </td>
                <td>
                    <?=$kelas?>
                </td>
                <td>
                    <?=$Waktu?>
                </td>
                <td>
                    <button class="btn maroon btn-small waves-effect waves-light btn-ubah1" value="<?=$origin.','.$destination.','.$kelas.','.$Waktu ?>">Ubah</button>
                    <button onclick='location.href="aksi.php?hapus1=<?=$data['origin'] ?>"' class="btn grey btn-small waves-effect waves-light">Hapus</button>
                </td>
            </tr>
            <?php }
		?>
	</table>