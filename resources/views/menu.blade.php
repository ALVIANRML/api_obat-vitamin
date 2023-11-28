<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,800;1,400&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet">
    <title> Menu • Vitality </title>
</head>
<body>

    <div class="background">
        @extends('partials.navbar')

        <section id="text">
            <p class="text"> Selamat Datang di Vitality!</p>
            <p class="text2"> Berikut layanan yang kami sediakan untuk Anda </p>
        </section>
        <section id="menu">

              <!-- Container untuk empat kolom-kolom -->
  <div class="container">
    <!-- Kotak 1 -->
    <a style="text-decoration:none" href="/penyakit">
    <div class="penyakit1">
        <img class="gbr-penyakit" src="gambar/penyakit.png" alt="penyakit ">
        <div class="teks-penyakit">
            <p>Penyakit</p>
        </div>
    </div>
    </a>
    <!-- Kotak 2 -->
    <a style="text-decoration:none" href="/obatvitamin">
    <div class="deskripsi1">
        <img class="gbr-deskripsi" src="gambar/deskripsi.png" alt="deskripsi ">
        <p class="teks-deskripsi">
            Vitamin & Obat
        </p>
    </div>
    </a>
    <!-- Kotak 3 -->
    <a style="text-decoration:none" href="/vitality">
    <div class="jual1">
        <img class="gbr-jual" src="gambar/jual.png" alt="jual">
        <p class="teks-jual">
            Pembelian <br> Vitamin & Obat
        </p>
    </div>
    </a>
    <!-- Kotak 4 -->
    <a style="text-decoration:none" href="/rumahsakit">
    <div class="rumahsakit1">
        <img class="gbr-rumahsakit" src="gambar/rs.png" alt="rumahsakit">
        <p class="teks-rumahsakit">
            Rumah Sakit <br> Terdekat
        </p>
    </div>
    </a>
  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </div>

    </body>
</html>
