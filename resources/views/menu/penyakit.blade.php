<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Poppins:ital,wght@0,200;0,400;0,600;0,700;0,800;1,400;1,700&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet">    <link rel="stylesheet" type="text/css" href="/css/penyakit.css">
    <title> Penyakit • Vitality </title>

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
                                        <button type="submit" class="dropdown-item"><span class="material-symbols-outlined"></span>log out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="login">
                                {{-- <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45"> --}}
                                Log in
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>

        <p class="text">Penyakit</p>
        <div class="search-container">
            <form action="/penyakit" method="GET">
                <input type="text" class="search-input" name="search" placeholder="Search...">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>

        <p class="text2"> Daftar Penyakit  </p>
        <hr class="fancy">
        @foreach ($penyakit as $index => $penyakits)
            <div class="grid-container">
                <div class="card" onclick="openPopup({{ $index }})">
                    <p class="p">{{ $penyakits->nama }}</p>
                </div>
            </div>

            <div class="popup" id="popup{{ $index + 1 }}">
                <div class="content">
                    <span class="close" onclick="closePopup({{ $index }})">&times;</span>

                    <center><h1>{{ $penyakits->nama }}</h1></center>

                    <p class="keterangan"> Penyebab </p>
                    <p class="keterangan-isi">{{ $penyakits->penyebab }}<br></p>
                    <p class="keterangan">Pengobatan</p>
                    <p class="keterangan-isi">{{ $penyakits->pengobatan }}<br></p>
                    <p class="keterangan">Gejala</p>
                    <p class="keterangan-isi">{{ $penyakits->gejala }}</p>
                </div>
            </div>
        @endforeach

        {{-- footer --}}
        <div class="footer-basic">
            <footer>
                <section id="aboutus">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                          <center><h2> OUR TEAM </h2> </center>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-lg-4 col-md-6 d-flex align-items-center">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <a href="https://www.instagram.com/virgiebeatrice/">
                                    <img src="gambar/footer/virgie.jpg" alt="" class="img-fluid">
                                </a>

                              </div>
                              <!-- member info -->
                              <div class="member-info">
                                <h4>Virgie Beatrice</h4>
                                <span>NIM: 221401034</span>
                              </div>
                            </div>
                          </div>
                          <!-- KE2 -->
                          <div class="col-lg-4 col-md-6 d-flex align-items-center">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                  <a href="https://www.instagram.com/alvianrml/">
                                    <img src="gambar/footer/alvian.jpg" alt="" class="img-fluid">
                                </a>
                              </div>
                              <!-- member info -->
                              <div class="member-info">
                                <h4> ALVIAN </h4>
                                <span>NIM: 221401085</span>
                              </div>
                            </div>
                          </div>
                          <!-- KE3 -->
                          <div class="col-lg-4 col-md-6 d-flex align-items-center">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                <a href="https://www.instagram.com/niirmalaaa/">
                                    <img src="{{ asset('gambar/footer/nirmala.jpg') }}" alt="nirmala" class="img-fluid">
                                </a>
                              </div>
                              <!-- member info -->
                              <div class="member-info">
                                <h4> Nirmala Aizya Agatha Silalahi </h4>
                                <span>NIM: 221401118</span>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                </section>
                  <br> <hr>

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
        <script>
            function openPopup(index) {
                document.getElementById(`popup${index + 1}`).style.display = "block";
            }

            function closePopup(index) {
                document.getElementById(`popup${index + 1}`).style.display = "none";
            }
        </script>
    </div>
</body>
</html>
