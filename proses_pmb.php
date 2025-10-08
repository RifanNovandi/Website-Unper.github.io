<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data PMB - Hasil Pengiriman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0066cc, #00ccff);
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      padding: 30px;
      margin-top: 40px;
      margin-bottom: 40px;
    }
    h2 {
      text-align: center;
      color: #004080;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .table th {
      width: 35%;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Data Pendaftaran Mahasiswa Baru</h2>
  <p class="text-center text-muted">Berikut hasil data yang Anda kirimkan:</p>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<table class='table table-bordered'>";
    echo "<tr><th colspan='2' class='table-primary text-center'>I. Data Pribadi</th></tr>";
    echo "<tr><th>Nama Lengkap</th><td>" . htmlspecialchars($_POST["nama_lengkap_rifan"]) . "</td></tr>";
    echo "<tr><th>NIK</th><td>" . htmlspecialchars($_POST["nik_rifan"]) . "</td></tr>";
    echo "<tr><th>Tempat Lahir</th><td>" . htmlspecialchars($_POST["tempat_lahir_rifan"]) . "</td></tr>";
    echo "<tr><th>Tanggal Lahir</th><td>" . htmlspecialchars($_POST["tanggal_lahir_rifan"]) . "</td></tr>";
    echo "<tr><th>Jenis Kelamin</th><td>" . htmlspecialchars($_POST["jenis_kelamin_rifan"]) . "</td></tr>";
    echo "<tr><th>Agama</th><td>" . htmlspecialchars($_POST["agama_rifan"]) . "</td></tr>";
    echo "<tr><th>Alamat</th><td>" . nl2br(htmlspecialchars($_POST["alamat_rifan"])) . "</td></tr>";
    echo "<tr><th>Nomor HP</th><td>" . htmlspecialchars($_POST["nohp_rifan"]) . "</td></tr>";
    echo "<tr><th>Email</th><td>" . htmlspecialchars($_POST["email_rifan"]) . "</td></tr>";
    echo "<tr><th>Status Pernikahan</th><td>" . htmlspecialchars($_POST["status_rifan"]) . "</td></tr>";

    echo "<tr><th colspan='2' class='table-primary text-center'>II. Data Sekolah Asal</th></tr>";
    echo "<tr><th>Nama Sekolah Asal</th><td>" . htmlspecialchars($_POST["nama_sekolah_rifan"]) . "</td></tr>";
    echo "<tr><th>Jurusan di Sekolah</th><td>" . htmlspecialchars($_POST["jurusan_sekolah_rifan"]) . "</td></tr>";
    echo "<tr><th>Tahun Lulus</th><td>" . htmlspecialchars($_POST["tahun_lulus_rifan"]) . "</td></tr>";
    echo "<tr><th>NISN</th><td>" . htmlspecialchars($_POST["nisn_rifan"]) . "</td></tr>";

    echo "<tr><th colspan='2' class='table-primary text-center'>III. Pilihan Program Studi</th></tr>";
    echo "<tr><th>Pilihan 1 Program Studi</th><td>" . htmlspecialchars($_POST["prodi1_rifan"]) . "</td></tr>";
    echo "<tr><th>Pilihan 2 Program Studi</th><td>" . htmlspecialchars($_POST["prodi2_rifan"]) . "</td></tr>";
    echo "<tr><th>Jalur Pendaftaran</th><td>" . htmlspecialchars($_POST["jalur_rifan"]) . "</td></tr>";

    echo "<tr><th colspan='2' class='table-primary text-center'>IV. Dokumen Pendukung</th></tr>";
    if (isset($_FILES["ijazah_rifan"]["name"])) {
      echo "<tr><th>Scan Ijazah</th><td>" . htmlspecialchars($_FILES["ijazah_rifan"]["name"]) . "</td></tr>";
    }
    if (isset($_FILES["ktp_rifan"]["name"])) {
      echo "<tr><th>Scan KTP/KK</th><td>" . htmlspecialchars($_FILES["ktp_rifan"]["name"]) . "</td></tr>";
    }
    if (isset($_FILES["foto_rifan"]["name"])) {
      echo "<tr><th>Pas Foto</th><td>" . htmlspecialchars($_FILES["foto_rifan"]["name"]) . "</td></tr>";
    }

    echo "<tr><th colspan='2' class='table-primary text-center'>V. Pernyataan</th></tr>";
    echo "<tr><th>Persetujuan Data</th><td>✔ Disetujui</td></tr>";

    echo "</table>";

    echo "<div class='alert alert-success text-center mt-4'>Terima kasih, data Anda telah berhasil dikirim!</div>";
  } else {
    echo "<div class='alert alert-danger'>Tidak ada data yang dikirim.</div>";
  }
  ?>
  <div class="text-center mt-3">
    <a href="index.html" class="btn btn-secondary">Kembali ke Formulir</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
