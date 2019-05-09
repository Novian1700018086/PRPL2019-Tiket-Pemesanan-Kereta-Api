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
        Jadwal Kereta Api
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
    $QueryString = "SELECT kereta.kode, kereta.asal, kereta.tujuan, kereta.kelas, kereta.harga kereta.tanggal, kereta.waktu FROM kereta WHERE
    kereta.kode LIKE '%$cari%' or kereta.asal LIKE '%$cari%' or kereta.tujuan LIKE '%$cari%' or kereta.kelas LIKE '%$cari%' or kereta.kelas LIKE '%$cari%' or kereta.tanggal LIKE '%$cari%' or kereta.waktu LIKE '%$cari%'";
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
                <th>Kode</th>
                <th>asal</th>
                <th>Tujuan</th>
                <th>Kelas</th>
                <th>Harga</th>
                <th>Tanggal Berangkat</th>
                <th>Waktu Keberantakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $SQL =mysqli_query($con,"select * from kereta");
			$i=1;
			while ($data=mysqli_fetch_array($SQL) and extract($data)) { ?>
            <tr>
                <td>
                    <?=$i++ ?>
                </td>
                <td>
                    <?=$kode?>
                </td>
                <td>
                    <?=$asal?>
                </td>
                <td>
                    <?=$tujuan?>
                </td>
                <td>
                    <?=$kelas?>
                </td>
                <td>
                    <?=$harga?>
                </td>
                <td>
                    <?=$tanggal?>
                </td>
                <td>
                    <?=$waktu?>
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
                <input id="no" type="text" class="class validate" name="no">
                <label for="no">kode</label>
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
                <input id="harga" type="text" class="class validate" name="harga">
                <label for="harga">Harga</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tanggal" type="date" class="class validate" name="tanggal">
                <label for="tanggal">Tanggal Brangkat</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="waktu" type="time" class="class validate" name="waktu">
                <label for="waktu">Waktu Keberangkatan</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn blue btn-submit " name="tambah1">Tambah</button>
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
        <button class="btn blue waves-effect waves-light" type="submit" name="transaksi1">Submit<i class="material-icons right">send</i></button>
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
        $(".no").val(str[0])
        $(".asal").val(str[1])
        $(".tujuan").val(str[2])
        $(".kelas").val(str[3])
        $(".harga").val(str[4])
        $(".tanggal").val(str[5])
        $(".waktu").val(str[6])
        $(".title").html("Ubah1 Data")
        $(".btn-submit").attr('name','ubah1').html("Ubah")
        $(".no").attr('readonly','dik')
        $(".asal").attr('readonly','dik')
        $(".tujuan").attr('readonly','dik')
        $("label").addClass('active')
        $(".modal").modal('open')
    })
</script>