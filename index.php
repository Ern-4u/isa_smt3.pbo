<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-6">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>menampilkan gambar</title>
</head>
<body>
  <img src="http://localhost/isa_smt3.pbo/kopi.jpg" width="250" height="150" />
  <p>Isa : 42423049</p>

  <h1 align="center"> Pemrograman Berorientasi Objek</h1>

  <h2>1. Pengertian</h2>
  <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data dalam bentuk <em>field</em> atau dikenal juga sebagai <em>atribut</em>; serta kode, dalam bentuk <em>fungsi</em>/<em>prosedur</em> yang dikenal juga sebagai <em>method</em>. Semua data dan fungsi di dalam paradigma ini dibungkus dalam <em>kelas-kelas</em> atau <em>objek-objek</em>. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya.</p>

  <h2>2. Bahasa Pemrograman Yang mendukung PBO</h2>
  <p>Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:</p>
  <ul>
    <li>Visual Foxpro</li>
    <li>Java</li>
    <li>C++</li>
    <li>Pascal (bahasa pemrograman)</li>
    <li>SIMULA</li>
    <li>Smalltalk</li>
    <li>Ruby</li>
    <li>Python</li>
    <li>PHP</li>
    <li>TypeScript</li>
    <li>C#</li>
    <li>Delphi</li>
    <li>Eiffel</li>
    <li>Perl</li>
    <li>Adobe Flash AS 3.0</li>
  </ul>

  <h2>3. Membuat Tabel kategori Produk</h2>
  <style>
    table{
        border-collapse: collapse;
            width: 50%
    }
            
    th, td{
        border: 1px solid #843434;
            padding: 3px;
            text-align: left;
    }
    th{
            background-color: #9765;
      }
</style>

  <table class="table">
    <thead>
        <tr>
          <th>NO</th>
          <th>Kategori Produk</th>
          <th>Nama Produk</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Bumbu Dapur</td>
          <td>Garam</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Bumbu Dapur</td>
          <td>Cabe</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Bumbu Dapur</td>
          <td>Lengkuas</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Bumbu Dapur</td>
          <td>Terasi</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Sembako</td>
          <td>Beras</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Sembako</td>
          <td>Minyak Goreng</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Sembako</td>
          <td>Gula Pasir</td>
        </tr>
  </table>
    
  <h2>4. Membuat Tabel Produk</h2>
  <table class="table">
    <thead>
      <tr>
        <th>NO</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Garam</td>
        <td>10</td>
        <td>7000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Cabe</td>
        <td>10</td>
        <td>25000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lengkuas</td>
        <td>10</td>
        <td>12000</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Terasi</td>
        <td>10</td>
      <td>35000</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Beras</td>
      <td>10</td>
      <td>13000</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Minyak Goreng</td>
      <td>10</td>
      <td>15000</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Gula Pasir</td>
      <td>10</td>
      <td>13000</td>
    </tr>
  </tbody>
</table>
<<<<<<< HEAD

>>>>>>>

<h2>membuat class buah</h2>
>>>>>>> b20c408 (menambahkan penjelasan crud)
  
  <?php
class buah {
  public $nama;
  public $warna;

  function set_name($nama) {
    $this->nama = $nama;
  }
  function get_name() {
    return $this->nama;
  }
}


$apel = new buah();
$pisang = new buah();
$apel->set_name('Apel');
$pisang->set_name('Pisang');

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
echo "<br>";

?>
<h2>menambahkan class mobil</h2>
<?php

class mobil {
  public $warna;

  function set_warna($warna) {
    $this->warna = $warna;
  }

  function get_warna() {
    return "warna mobil itu adalah ". $this->warna;
  }
}

$toyota = new mobil();
$toyota->set_warna('biru metalik');

echo $toyota->get_warna();
?>

<h2>penjelasan tentang CRUD</h2>
<h3>file koneksi_db</h3>

<p>
  <img src="http://localhost/isa_smt3.pbo/koneksi_db.png" width="" height="">
  <br>$host="localhost";
  <br>$user="root";
  <br>$password="";
  <br>$db="db_isa";

  <ul>Variabel-variabel ini digunakan untuk menyimpan detail konfigurasi koneksi ke database:
    <li>$host: Nama host server database. localhost berarti server database berjalan di komputer lokal.</li>
    <li> $user: Nama pengguna (user) untuk mengakses database. Di sini, user-nya adalah root, yang merupakan default user di MySQL untuk pengembangan lokal.</li>
    <li>$password: Kata sandi untuk user tersebut. Dalam hal ini, password-nya kosong (""), yang sering digunakan untuk pengaturan lokal default.</li>
    <li>$db: Nama database yang akan dihubungkan, yaitu db_isa.</li>
  </ul>
 
</p>

<h3>File create.php</h3>
<p>
  <img src="http://localhost/isa_smt3.pbo/create_1.png" alt="">
  <img src="http://localhost/isa_smt3.pbo/create_2.png" alt="">
</p>

<h3>file index.php</h3>
<p>
  <img src="http://localhost/isa_smt3.pbo/index_1.png" alt="">
  <img src="http://localhost/isa_smt3.pbo/index_2.png" alt="">
  <img src="http://localhost/isa_smt3.pbo/index_3.png" alt="">
</p>
<h3>File update</h3>
<p>
  <img src="http://localhost/isa_smt3.pbo/update_1.png" alt="">
  <img src="http://localhost/isa_smt3.pbo/update_2.png" alt="">
  <img src="http://localhost/isa_smt3.pbo/update_3.png" alt="">
  <img src="http://localhost/isa_smt3.pbo/update_4.png" alt="">
</p>
</div>
</body>
</html>

