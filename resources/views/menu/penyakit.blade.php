<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" type="text/css" href="/css/penyakit.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,800;1,400&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet">
    <title> Penyakit • Vitality </title>
</head>
<body>
    <div class="background">
        <nav class="navbar sticky-top bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="http://127.0.0.1:8000/menu">
                <img src="gambar/Logo Navbar.png" alt="Vitality" width="135" height="55">
              </a>
              <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45">
            </nav>

        </div>
        <p class="text">
            Penyakit
        </p>
        <p class="text1">
            Ketik penyakit yang ingin Anda cari!
        </p>
        <div class="search-container">
            <form action="/penyakit" method="GET">
            <input type="text" class="search-input"  name="search"  placeholder="Search...">
            <button type="submit" class="search-button"> Search </button>
        </form>
        </div>

        <p class="text2"> Daftar Penyakit  </p>
        <hr class="fancy">
        @foreach ($penyakit as $index => $penyakits)
            <div class="grid-container">
                <div class="card" onclick="openPopup(1)">
                    <p class="p"> {{ $penyakits->nama }} </p>
                </div>
                <!-- Tambahkan box lainnya di sini -->
            </div>

            <div class="popup" id="popup1">
                <div class="content">
                <span class="close" onclick="closePopup(1)">&times;</span>
                <h2 class="h">{{ $penyakits->nama }}</h2>
                <h1 class="h1">Penyebab</h1>
                <p class="p1">{{ $penyakits->penyebab }}</p>
                <h1 class="h1">Pengobatan</h1>
                <p class="p1">{{ $penyakits->pengobatan }}</p>
                <h1 class="h1">Gejala</h1>
                <p class="p1">{{ $penyakits->gejala }}</p>

                </div>
            </div>

  @endforeach
        <script>
            function openPopup(index) {
            document.getElementById(`popup${index}`).style.display = "block";
            }

            function closePopup(index) {
            document.getElementById(`popup${index}`).style.display = "none";
            }
        </script>
    </div>
</body>
</html>
