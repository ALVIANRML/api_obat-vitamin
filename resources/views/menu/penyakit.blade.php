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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,200;1,900&display=swap" rel="stylesheet">
    <title> Penyakit • Vitality </title>
</head>
<body>
    <div class="background">
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
                                <li>
                                    <form action="logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><span class="material-symbols-outlined">
                                        </span>log out</button>
                                    </form>
                                    </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="login">
                                {{-- <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45"> --}}
                                login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
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
                <div class="card" onclick="openPopup({{ $index }})">
                    <p class="p"> {{ $penyakits->nama }} </p>
                </div>
                <!-- Tambahkan box lainnya di sini -->
            </div>




            <div class="popup" id="popup{{ $index + 1 }}">
                <div class="content">
                <span class="close" onclick="closePopup({{ $index }})">&times;</span>
                <h2 class="h">{{ $penyakits->nama }}</h2>
                <h1>Penyebab:</h1>
                <p class="p1">{{ $penyakits->penyebab }}</p>
                <h1>Pengobatan:</h1>
                <p class="p1">{{ $penyakits->pengobatan }}</p>
                <h1>Gejala:</h1>
                <p class="p1">{{ $penyakits->gejala }}</p>

                </div>
            </div>
            </div>


  @endforeach
        <script>
            function openPopup(index) {
            document.getElementById(`popup${index+1}`).style.display = "block";
            }

            function closePopup(index) {
            document.getElementById(`popup${index+1}`).style.display = "none";
            }
        </script>
    </div>
</body>
</html>
