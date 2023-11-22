<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/obatdanvitamin.css">
    <title> Vitamin dan Obat • Vitality </title>
</head>
<body>
    <div class="background">
        @extends('partials.navbar');

            <p class="text">
                Vitamin dan Obat
            </p>
            <div class="search-container">
                <form action="/obatvitamin" method="GET">
                <input type="text" class="search-input" name="search" placeholder="Search...">
                <button type="submit" class="search-button"> Search </button>
                </form>
            </div>


            <p class="text1">
                Daftar <br> Vitamin & Obat
            </p>
            <hr class="fancy">

            <div class="container">
                <div class="row">
                    @foreach ($obatvitamin as $index => $obatvitamins)
                        <div class="col-md-4">

                            <div class="box">
                                <div class="picture">
                                    <img src={{ $obatvitamins->gambar }} alt="">
                                    <p class="teks">{{ $obatvitamins->nama }}</p>
                                    <div class="beli">Detail</div>
                                </div>
                            </div>

                        </div>

                        @if (($index + 1) % 1 == 0)
                            </div>
                            <div class="row">
                        @endif
                    @endforeach
                </div>

            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>
