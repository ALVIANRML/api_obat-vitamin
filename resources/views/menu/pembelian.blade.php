<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/pembelian.css">
    <title> Vitamin dan Obat • Vitality </title>
</head>
<body>
    <div class="background">
        @extends('partials.navbar')
        <p class="text">Pembelian Vitamin dan Obat</p>
        <div class="search-container">
            <form action="/vitality" method="GET"> <!-- Tambahkan action dan method -->
                <input type="text" class="search-input" name="search" placeholder="Search...">
                <button type="submit" class="search-button">Search</button> <!-- Ganti type menjadi submit -->
            </form>
        </div>

    <p class="text1">Daftar Pembelian <br> Vitamin & Obat</p>
    <hr class="fancy">

    <div class="container">
        <div class="row">
            @foreach ($obatvitamin as $index => $vitalitys)
                <div class="col-md-4">
                    <div class="box">
                        <div class="picture">
                            <img src={{$vitalitys->gambar}} alt="">
                            {{-- <p class="teks">{{ $vitalitys->name }}</p> --}}
                            <p class="teks">{{ $vitalitys->nama }}
                                <div class="beli">beli</div>
                                <p class="teks">Rp.{{ $vitalitys->harga }}</p>
                            </p>
                        </div>
<br>
                    </div>
                </div>
                @if (($index + 1) % 1 == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>
    </div>
    </div>
</body>
</html>
