<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
 	 <title>PHP Dasar</title>
</head>
<body>
	<div class="login">
    <h1>FORM  <img src="logo.png" style="height:80px; width:80px;" > PEKERJAAN</h1>
    <form method="post">
        <label>Nama : <br> </label>
        <input type="text" name="nama" placeholder="Masukkan nama Anda">
        <br>
        <label>Tanggal Lahir : <br></label>
        <input type="date" name="tanggal">
        <br>
        <label>Pekerjaan : <br></label>
        <input type="radio" name="pekerjaan" value="Karyawan Swasta">Karyawan Swasta</input>
        <input type="radio" name="pekerjaan" value="POLRI">POLRI</input>
        <input type="radio" name="pekerjaan" value="Dosen">Dosen</input>
        <input type="radio" name="pekerjaan" value="Guru">Guru</input>
        <input type="radio" name="pekerjaan" value="Dokter">Dokter</input>
        <input type="radio" name="pekerjaan" value="Programmer">Programmer</input>
        <input type="radio" name="pekerjaan" value="Pengacara">Pengacara</input>
        <input type="radio" name="pekerjaan" value="Designer">Designer</input>
        <input type="radio" name="pekerjaan" value="IT Support">IT Support</input>
        <input type="radio" name="pekerjaan" value="Lainnya">Lainnya</input>
        <br>
        <br>
        <br>
        <br>
        <input type="submit" name="button" value="SUBMIT">
        <br>
        <br>
        <h3>Hasil Output: </h3>

    <?php
    $lahir = @$_GET['tanggal'];
    $button = @$_POST['button'];

    if ($button) {
        $nama=$_POST['nama'];
        $job=@$_POST['pekerjaan'];
        echo "<p>Nama : $nama</p>";
        $tanggal_lahir = new DateTime($_POST['tanggal']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "<p>Umur : ";
        echo $thn." Tahun ".$bln." Bulan ".$tgl." Hari";
         
        if ($job=="Karyawan Swasta") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 5.100.000/bulan</p>";
        }
        elseif ($job=="POLRI") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 5.500.000/bulan</p>";
        }
        elseif ($job=="Dosen") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 4.415.000/bulan</p>";
        }
        elseif ($job=="Guru") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 6.000.000/bulan</p>";
        }
        elseif ($job=="Dokter") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 10.500.000/bulan</p>";
        }
        elseif ($job=="Programmer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 10.000.000/bulan</p>";
        }
        elseif ($job=="Pengacara") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 20.000.000/bulan</p>";
        }
        elseif ($job=="Designer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 8.500.000/bulan</p>";
        }
        elseif ($job=="IT Support") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 4.800.000/bulan</p>";
        }
       
        elseif ($job=="Lainnya") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp.(Sesuai pekerjaan)/bulan</p>";
        }
        else {
            echo "<p>Pilih Pekerjaan</p>";
        }
        echo "<br><br><p>&copy;" . date("Y") . " Desiana Eka Safitri/311910817 - UPBTI.19.B1</p>";
    }
    ?>
    </form>
</body>
</html>