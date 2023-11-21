<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">;
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/obatdanvitamin.css">
    <title> Vitamin dan Obat • Vitality </title>
</head>
<body>
    <div class="background">
        <nav class="navbar sticky-top bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/menu">
                <img src="gambar/Logo Navbar.png" alt="Vitality" width="135" height="55">
              </a>
              <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45">
            </nav>

            <p class="text">
                Vitamin dan Obat
            </p>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="button" class="search-button"> Search </button>
            </div>
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
                                    <p class="teks">{{ $obatvitamins->nama }}</p>
                                </div>
                            </div>

                        </div>

                        @if (($index + 1) % 3 == 0)
                            </div>
                            <div class="row">
                        @endif
                    @endforeach
                </div>
            </div>



    </div>
</body>
</html>
