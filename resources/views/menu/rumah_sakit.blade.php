<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="/css/rumahsakit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;0,800;1,400;1,700&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet"></head>
    <title> Rumah Sakit • Vitality </title>
</head>

<body>
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
                                    </span>Log out</button>
                                </form>
                                </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="login">
                            Log in
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

            <div class="background">
                <p class="text"> Rumah Sakit Terdekat </p>

                <div class="container1">
                    {{-- <div class="location-container">
                        <button class="locationBtn" id="locationBtn">Izin Lokasi</button>
                    </div> --}}
                    <div class="search-container">
                        <form action="/rumahsakit" method="GET">
                            <input type="text" class="search-input" name="search" placeholder="Search...">
                            <button type="submit" class="search-button"> Search </button>
                            </form>
                    </div>
                </div>

                <p class="text2"> Daftar Rumah Sakit </p>
                <hr class="fancy">

            <div class="grid-container">
                {{-- <div class="col-md-4 mt-40" > --}}

                    @foreach ($rumahsakit as $index => $rumahsakits)
                    <div class="card" onclick="openPopup({{ $index }})" style="max-width: 540px;">
                        <div class="row no-gutters">

                          <div class="picture" img>
                            <img src="{{ $rumahsakits->gambar }}" alt="Rumah Sakit" height="100%"   >
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"> {{ $rumahsakits->nama }} </h5>
                              <p class="card-text"><small class="text-muted"> Medan - Sumatera Utara </small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    {{-- @foreach ($rumahsakit as $index => $rumahsakits)
                    <div class="card" onclick="openPopup({{ $index }})">
                        <div class="picture" img>
                            <img src="{{ $rumahsakits->gambar }}" alt="Rumah Sakit">
                        </div>
                        <div class="picture2">
                            <p class="text1"> {{ $rumahsakits->nama }} </p>
                        </div>
                    </div>
                </div> --}}

                <div class="popup" id="popup{{ $index + 1 }}">
                    <div class="content">
                        <span class="close" onclick="closePopup({{ $index }})">&times;</span>
                        <div class="popup-body">
                            <img src="{{ $rumahsakits->gambar }}" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                <h2><center> {{ $rumahsakits->nama }} </center></h2>
                                <p class="keterangan-isi" id="popupAlamat"> Alamat: {{ $rumahsakits->alamat }}</p>
                                <p class="keterangan-isi" id="popupKontak"> No. Rumah Sakit: {{ $rumahsakits->kontak }}</p>
                                <p class="keterangan-isi" id="popupKontak"> Maps:</p>
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <!-- Ganti $rumahsakits->map dengan URL peta Google Maps -->
                                        {!! $rumahsakits->map !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

                {{-- footer --}}
                <div class="footer-basic">
                    <footer>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="/">Home</a></li>
                            <li class="list-inline-item"><a href="/menu">Services</a></li>
                            <li class="list-inline-item"><a href="#aboutus">About Us</a></li>
                            <li class="list-inline-item"><a href="#copyright">Copyright</a></li>
                        </ul>
                          <section id="copyright">
                              <p class="copyright"> Vitality © 2023</p>
                          </section>
                    </footer>
                </div>

        </div>

        <script>
                function openPopup(index) {
                    document.getElementById(`popup${index + 1}`).style.display = "block";
                }
                function closePopup(index) {
                    document.getElementById(`popup${index + 1}`).style.display = "none";
                }
            </script>


</body>
</html>
