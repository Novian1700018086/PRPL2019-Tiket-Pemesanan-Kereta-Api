<?php require "koneksi.php" ?>
<link rel="stylesheet" href="./assets/lib/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="./assets/lib/jquery.js"></script>
<script src="./assets/lib/materialize.min.js"></script>
<div class="container">

     <center><h2>PEMESANAN TIKET KERETA API</h2></center>
    <table>
        <thead>
            <tr>
                <th><a class="waves-effect waves-light btn btn-small cyan modal-trigger" href="indeks.php">JADWAL KERETA</a></th>
                <th><a class="waves-effect waves-light btn btn-small cyan modal-trigger" href="indeks2.php">PEMESANAN</a></th>
                <th><a class="waves-effect waves-light btn btn-small cyan modal-trigger" href="#modal-transaksi">TRANSAKSI</a></th>
            </tr>
        </thead>
    </table>
    <h4>
        Pesan Tiket Kereta Api
        <a class="waves-effect waves-light btn btn-small blue modal-trigger" href="#modal1"><i class="material-icons right">create</i> Tambah</a>
    </h4>
    <form action="" method="post">
        <input type="text" name="keyword" class="form-control" size="10" placeholder="Search" autofocus autocomplete="off">
        <button type="submit" name="cari" class="waves-effect waves-ligh btn"><i class="large material-icons right">search</i>cari</button>
    </form>

<?php 
if(isset($_POST['cari'])){
	$cari = $_POST['keyword'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
    $QueryString = "SELECT pemesanan.id_pesan, pemesanan.nama, pemesanan.atas_nama, pemesanan.usia, pemesanan.no_kk, pemesanan.no_hp, pemesanan.tgl_pesan,
    pemesanan.jml_penumpang FROM pemesanan WHERE
    pemesanan.id_pesan LIKE '%$cari%' or pemesanan.nama LIKE '%$cari%' or pemesanan.atas_nama LIKE '%$cari%' or pemesanan.usia LIKE '%$cari%' or
    pemesanan.no_kk LIKE '%$cari%' or pemesanan.no_hp LIKE '%$cari%' or pemesanan.tgl_pesan LIKE '%$cari%' or pemesanan.jml_penumpang LIKE '%$cari%'";
    $SQL = mysqli_query($con,$QueryString);
    
}
?>
<head>
<style type="text/css">

                body {
                      background: url(kereta9.png) no-repeat fixed;
                    -webkit-background-size: 50% 50%;
                    -moz-background-size: 50% 50%;
                    -o-background-size: 95% 95%;
                    background-size: 20% 20%;
                 }

            </style>
          </head>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Customer</th>
                <th>Nama</th>
                <th>Atas Nama</th>
                <th>Usia</th>
                <th>No KK</th>
                <th>No HP</th>
                <th>Tanggal Pesan</th>
                <th>Jumlah Penumpang</th>
            </tr>
        </thead>
        <tbody>
            <?php
			$SQL =mysqli_query($con,"select * from pemesanan");
			$i=1;
			while ($data=mysqli_fetch_array($SQL) and extract($data)) { ?>
            <tr>
                <td>
                    <?=$i++ ?>
                </td>
                <td>
                    <?=$id_pesan?>
                </td>
                <td>
                    <?=$nama?>
                </td>
                <td>
                    <?=$atas_nama?>
                </td>
                <td>
                    <?=$usia?>
                </td>
                <td>
                    <?=$no_kk?>
                </td>
                <td>
                    <?=$no_hp?>
                </td>
                <td>
                    <?=$tgl_pesan?>
                </td>
                <td>
                    <?=$jml_penumpang?>
                </td>
            </tr>
            <?php }
		?>
        </tbody>
    </table>
</div>

<form method="post" action="aksi.php" id="modal1" class="modal" style="width:300px">
    <div class="modal-content">
        <h5 class="title">Tambah Data</h5>
        <div class="row">
            <div class="input-field col s12">
                <input id="id_pesan" type="text" class="class validate" name="id_pesan">
                <label for="id_pesan">ID Customer</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="nama" type="text" class="class validate" name="nama">
                <label for="nama">Nama</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="atas_nama" type="text" class="class validate" name="atas_nama">
                <label for="atas_nama">Atas Nama</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="usia" type="text" class="class validate" name="usia">
                <label for="usia">Usia</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="no_kk" type="text" class="class validate" name="no_kk">
                <label for="no_kk">No KK</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="no_hp" type="text" class="class validate" name="no_hp">
                <label for="no_hp">No HP</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tgl_pesan" type="datetime" class="class validate" name="tgl_pesan">
                <label for="tgl_pesan">Tanggal Pemesanan</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="jml_penumpang" type="text" class="class validate" name="jml_penumpang">
                <label for="jml_penumpang">Jumlah Penumpang</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn blue btn-submit " name="tambah2">Tambah</button>
    </div>
</form>

<form method="post" action="aksi.php" id="modal-transaksi" class="modal" style="width:300px">
    <div class="modal-content">
        <h5 class="title">Transaksi</h5>
        <div class="row">
            <div class="input-field col s12">
                <input id="no" type="text" class="class validate" name="no">
                <label for="no">NO</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="asal" type="text" class="class validate" name="asal">
                <label for="asal">Asal</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tujuan" type="text" class="class validate" name="tujuan">
                <label for="tujuan">Tujuan</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="kelas" type="text" class="class validate" name="kelas">
                <label for="kelas">Kelas</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="harga" type="text" class="class validate" name="harga" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                <label for="harga">Harga</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="jml_pesan" type="text" class="class validate" name="jml_pesan" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                <label for="jml_pesan">Jumlah Pesan</label>
            </div>
        </div>
        <div class="row">
            <div class="field-warp">
                <input id="tot_bayar" type="text" class="class validate" name="tot_bayar">
                <label for="tot_bayar">Total Bayar</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="diskon" type="text" class="class validate" name="diskon">
                <label for="diskon">Diskon</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tot_setdiskon" type="text" class="class validate" name="tot_setdiskon">
                <label for="tot_setdiskon">Total Setelah Diskon</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="bayar" type="text" class="class validate" name="bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                <label for="bayar">Bayar</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="kembalian" type="text" class="class validate" name="kembalian">
                <label for="kembalian">Kembalian</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn blue waves-effect waves-light" type="submit" name="transaksi2">Submit<i class="material-icons right">send</i></button>
    </div>
    <script type="text/javascript">
            function mulaiHitung(){
                Interval = setInterval("hitung()",1);
            }
            function hitung(){
                harga = parseInt(document.getElementById("harga").value);
                jml_pesan = parseInt(document.getElementById("jml_pesan").value);
                if(!isNaN(harga * jml_pesan))  tot_bayar =harga*jml_pesan
                else tot_bayar=""
                document.getElementById("tot_bayar").value = tot_bayar;
                
                diskon=0;
                persen="";
                if (tot_bayar > 5000){
                    diskon = (10/100)*tot_bayar;
                    persen= "10%";
                }
                document.getElementById("diskon").value = persen+"-->" +diskon;
                tot_setdiskon = tot_bayar - diskon;
                document.getElementById("tot_setdiskon").value = tot_setdiskon;
                bayar = parseInt(document.getElementById("bayar").value);
                if (!isNaN(bayar - tot_bayar)) kembalian =bayar-tot_bayar
                else kembalian=""
                document.getElementById("kembalian").value = kembalian;

            }
            function berhentiHitung(){
                clearInterval(Interval);
            }
        </script>
</form>


<script>
    $(document).ready(function () {
        $(".modal").modal()
    })

    $(".btn-ubah1").click(function(){
        str=$(this).attr('value').split(',')
        $(".id_pesan").val(str[0])
        $(".nama").val(str[1])
        $(".atas_nama").val(str[2])
        $(".usia").val(str[3])
        $(".no_kk").val(str[4])
        $(".no_hp").val(str[5])
        $(".tgl_pesan").val(str[6])
        $(".jml_penumpang").val(str[7])
        $(".title").html("Ubah1 Data")
        $(".btn-submit").attr('name','ubah1').html("Ubah")
        $(".id_pesan").attr('readonly','dik')
        $(".no_kk").attr('readonly','dik')
        $(".tgl_pesan").attr('readonly','dik')
        $("label").addClass('active')
        $(".modal").modal('open')
    })
</script>