<?php require "koneksi.php" ?>
<link rel="stylesheet" href="./assets/lib/materialize.min.css">
<script src="./assets/lib/jquery.js"></script>
<script src="./assets/lib/materialize.min.js"></script>
<div class="container">
<form action="" method="post">
    <table border="1">
        <tr>
            <td colspan="3" align="center"><h2>Form Transaksi</h2></td>
        </tr>
        <tr>
            <td>Asal</td>
            <td>:</td>
            <td><input type="text" name="asal" id="asal" /></td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>:</td>
            <td><input type="text" name="tujuan" id="tujuan" /></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" id="kelas" /></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="harga" id="harga" onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
        </tr>
        <tr>
            <td>Jumlah Pesan</td>
            <td>:</td>
            <td><input type="text" name="jml_pesan" id="jml_pesan" onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td><input type="text" name="tot_bayar" id="tot_bayar" /></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>:</td>
            <td><input type="text" name="diskon" id="diskon" /></td>
        </tr>
        <tr>
            <td>Total Setelah Diskon</td>
            <td>:</td>
            <td><input type="text" name="tot_setdiskon" id="tot_setdiskon" /></td>
        </tr>
        <tr>
            <td>Bayar</td>
            <td>:</td>
            <td><input type="text" name="bayar" id="bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
        </tr>
        <tr>
            <td>kembalian</td>
            <td>:</td>
            <td><input type="text" name="kembalian" id="kembalian" /></td>
        </tr>
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
                kembalian = bayar - tot_bayar;
                document.getElementById("kembalian").value = kembalian;

            }
            function berhentiHitung(){
                clearInterval(Interval);
            }
        </script>
    </table>
</form>
</div>