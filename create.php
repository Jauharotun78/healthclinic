<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "koneksi.php"
?>

<html>
<head>
<title>Layout</title>
<body bgcolor="orange">
<table align="center" border="0" width="900px">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--header-->
    <tr bgcolor="orange">
    <td colspan="2" height="90px"><img src="image/gambar.jpg" alt='Banner klinik' width="1300" height="250"></td>
    <!--tag dihilangkan-->
    </tr>

    <!--body-->
    <tr>
    <td width="600px" height="400px" bgcolor="white" valign="top">
    <!--kolom body1-->
        <table border="0">
        <tr bgcolor="orange">
        <td align="center" width="200px"><a href=home.html>Home</a></td>
        <td align="center" width="200px"><a href=profile.html>Profile</a></td>
        <td align="center" width="200px"><a href=pelayanan.html>Pelayanan</a></td>
        <td align="center" width="200px"><a href=registrasi.php>Registrasi</a></td>
        <td align="center" width="200px"><a href="https://www.halodoc.com/artikel/6-cara-mudah-menjaga-gaya-hidup-sehat">Infokes</a></td>
        </tr>
        </table>
        
        <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Data</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputnorm" class="form-label">No. RM</label>
          <input type="number" class="form-control" id="inputnorm" name="norm" placeholder="Masukan No. RM Pasien">
        </div>
        <div class="mb-3">
          <label for="inputNamapas" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control" id="inputNamapas" name="namapas" placeholder="Masukan Nama Pasien">
        </div>
        <div class="mb-3">
          <label for="inputAlamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Masukan Alamat Pasien">
        </div>
        <div class="mb-3">
          <label for="inputDiagnosa" class="form-label">Diagnosa</label>
          <input type="text" class="form-control" id="inputDiagnosa" name="diagnosa" placeholder="Masukan Diagnosa Pasien">
        </div>
        <div class="mb-3">
          <label for="inputRuang" class="form-label">Ruang</label>
          <input type="text" class="form-control" id="inputRuang" name="ruang" placeholder="Masukan Ruangan Pasien">
        </div>
        <div class="mb-3">
          <label for="inputTelepon" class="form-label">Telepon</label>
          <input type="text" class="form-control" id="inputTelepon" name="telepon" placeholder="Masukan No.Telepon Pasien">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
        <a href="registrasi.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $norm = $_POST['norm'];
      $namapas = $_POST['namapas'];
      $alamat = $_POST['alamat'];
      $diagnosa = $_POST['diagnosa'];
      $ruang = $_POST['ruang'];
      $telepon = $_POST['telepon'];

      // Membuat Query
      $query = "INSERT INTO tb_siswa (norm, namapas, alamat, diagnosa, ruang, telepon) VALUES('".$norm."', '".$namapas."', '".$alamat."', '".$diagnosa."', '".$ruang."', '".$telepon."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: registrasi.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

    </td>
    <td align="center" width="200px" bgcolor="white">
    <table>
        <tr>
            <td bgcolor="orange" width="200" height="50" align="center" valign="middle"><a href="https://yankes.kemkes.go.id/view_artikel/1538/pentingnya-medical-check-up-secara-rutin">Pentingnya Medical Check Up</a></td>
        </tr>
        <tr>
            <td bgcolor="orange" width="200" height="50" align="center" valign="middle"><a href="https://ayosehat.kemkes.go.id/pentingnya-cek-kesehatan-gigi-berkala">Pentingnya Cek Kesehatan Gigi</a></td>
        </tr>
        <tr>
            <td bgcolor="orange" width="200" height="50" align="center" valign="middle"><a href="https://ayosehat.kemkes.go.id/pentingnya-pemeriksaan-kehamilan-anc-di-fasilitas-kesehatan">Pentingnya Pemeriksaan Kehamilan</a></td>
        </tr>
    </td>
    <hr width="200">
    <hr width="100">
    <hr width="50">
    <img src="image/gambar.png" alt='Logo Klinik' width="150" height="150">
    <hr width="50">
    <hr width="100">
    <hr width="200">
    <h2>Health Article :</h2>
    </table>
    <hr width="200">
    <h5>Jam Operasional:</h5>
    <center>Senin - Jumat.....07.00 - 20.00 <br> Sabtu..................08.00 - 18.00 <br> Minggu........................Closed</center>
    <hr width="200">
    </tr>
    
    <!--footer-->
    <tr bgcolor="orange">
    <td align="center" colspan="2" height="120px">
    <table border="0" cellpadding="16" cellpassing="18">
        <tr>
            <td><br><br>
                <h5 align="left">Jl.Raya Demak-Purwodadi Km 10, Wonopolo,<br> Desa Botosengon, Kecamatan Dempet<br>Kabupaten Demak Jawa Tengah.<br>Kode Pos 59573.</h5>
                <h5 align="left">Hubungi kami :</h5>
                <h5 align="left">Telp : 027 000003/085444666777<br>Email : info@klinikkesehatan.com</h5>
            </td>
            <td>
                <h4 align="center">Lokasi kami</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.669463077194!2d110.69328985327961!3d-6.959993588962567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70eaac55c808cf%3A0x2e521ff0e678a228!2sBotosengon%2C%20Kec.%20Dempet%2C%20Kabupaten%20Demak%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1696477362387!5m2!1sid!2sid" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!--Masukkan kode peta Anda di sini, jika diperlukan-->
            </td>
            <td>
                <h4 align="center">Content</h4>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/ny5WqkvWlA0?si=alinqAaWMvgjLcVO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </td>
            <td>
                <h4 align="center">Content</h4>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/_JtsswlZzPg?si=WOmghfsz4ZNvuyXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </td>
        </tr>
    </table> 
    <p>&copy; 2023 Jauharotun Nafisah-D22.2022.03378. Hak cipta dilindungi undang-undang.</p>
    </td>
    <!--tag dihilangkan-->   
    </tr>
</body>
</head>
</html>