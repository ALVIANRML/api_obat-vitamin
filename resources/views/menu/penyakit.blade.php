<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" type="text/css" href="/css/penyakit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">
    <title> Penyakit • Vitality </title>
</head>
<body>
    <div class="background">
        {{-- @extends('partials.navbar') --}}
        <nav class="navbar sticky-top bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/menu">
                    <img src="gambar/Logo Navbar.png" alt="Vitality" width="135" height="55">
                </a>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">log out</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="login">
                                <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45">
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>

        <p class="text">
            Penyakit
        </p>
        <p class="text1">
            Ketik penyakit yang ingin Anda cari!
        </p>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button type="button" class="search-button"> Search </button>
        </div>
        <div class="container">
            @foreach ($penyakit as $penyakits )
                <div class="isi mt-70">
                    {{-- <p>Id penyakit: {{ $penyakits->id_penyakit }}</p> --}}
                    <p> Nama penyakit: {{ $penyakits->nama }}</p>
                    <p>Penyebab: {{ $penyakits->penyebab }}</p>
                    <p>Pengobatan: {{ $penyakits->pengobatan }}</p>
                    <p>Gejala: {{ $penyakits->gejala }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
