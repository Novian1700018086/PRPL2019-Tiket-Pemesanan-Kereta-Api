<?php require "koneksi.php" ?>
<?php
	include 'koneksi.php';
	$QueryString = "SELECT transaksi.id_pesan, transaksi.atas_nama, transaksi.tgl_transaksi, transaksi.total_bayar, transaksi.via_bayar,
    transaksi.id_transaksi, transaksi.no FROM transaksi";
	$SQL = mysqli_query($con,$QueryString); 
?>
<link rel="stylesheet" href="./assets/lib/materialize.min.css">
<script src="./assets/lib/jquery.js"></script>
<script src="./assets/lib/materialize.min.js"></script>
<div class="container">

     <center><h2>PEMESANAN TIKET KERETA API</h2></center>
    <table>
        <thead>
            <tr>
                <th><a class="waves-effect waves-light btn btn-small cyan modal-trigger" href="indeks.php">JADWAL KERETA</a></th>
                <th><a class="waves-effect waves-light btn btn-small cyan modal-trigger" href="indeks2.php">PEMESANAN</a></th>
                <th><a class="waves-effect waves-light btn btn-small cyan modal-trigger" href="indeks3.php">TRANSAKSI</a></th>
            </tr>
        </thead>
    </table>
    <h4>
        Transaksi Tiket Kereta Api
        <a class="waves-effect waves-light btn btn-small blue modal-trigger" href="#modal1">Tambah</a>
    </h4>

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
                <th>Kode kereta</th>
                <th>ID Customer</th>
                <th>Atas Nama</th>
                <th>Tanggal Transaksi</th>
                <th>Via Bayar</th>
                <th>Total Bayar</th>
                <th>ID Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
			$q =mysqli_query($con,"select * from transaksi");
			$i=1;
			while ($data=mysqli_fetch_array($q) and extract($data)) { ?>
            <tr>
                <td>
                    <?=$i++ ?>
                </td>
                <td>
                    <?=$kode?>
                </td>
                <td>
                    <?=$id_pesan?>
                </td>
                <td>
                    <?=$atas_nama?>
                </td>
                <td>
                    <?=$tgl_transaksi?>
                </td>
                <td>
                    <?=$via_bayar?>
                </td>
                <td>
                    <?=$total_bayar?>
                </td>
                <td>
                    <?=$id_transaksi?>
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
                <label for="no">Kode Kereta</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="id_pesan" type="text" class="class validate" name="id_pesan">
                <label for="id_pesan">ID Customer</label>
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
                <input id="tgl_transaksi" type="text" class="class validate" name="tgl_transaksi">
                <label for="tgl_transaksi">Tanggal Transaksi</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="via_bayar" type="text" class="class validate" name="via_bayar">
                <label for="via_bayar">Via Bayar</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="total_bayar" type="text" class="class validate" name="total_bayar">
                <label for="total_bayar">Total Bayar</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="id_transaksi" type="text" class="class validate" name="id_transaksi">
                <label for="id_transaksi">ID Transaksi</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn blue btn-submit " name="tambah1">Tambah</button>
    </div>
</form>

<script>
    $(document).ready(function () {
        $(".modal").modal()
    })

    $(".btn-ubah1").click(function(){
        str=$(this).attr('value').split(',')
        $(".no").val(str[0])
        $(".id_pesan").val(str[1])
        $(".atas_nama").val(str[2])
        $(".tgl_transaksi").val(str[3])
        $(".via_bayar").val(str[4])
        $(".total_bayar").val(str[5])
        $(".id_transaksi").val(str[6])
        $(".title").html("Ubah1 Data")
        $(".btn-submit").attr('name','ubah1').html("Ubah")
        $(".no").attr('readonly','dik')
        $(".id_pesan").attr('readonly','dik')
        $(".atas_nama").attr('readonly','dik')
        $(".id_transaksi").attr('readonly','dik')
        $("label").addClass('active')
        $(".modal").modal('open')
    })
</script>