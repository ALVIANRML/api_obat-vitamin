<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;0,800;1,400;1,700&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet"></head>
    <link rel="stylesheet" type="text/css" href="/css/obatdanvitamin.css">
    <title> Vitamin dan Obat • Vitality </title>
</head>
<body>
    <div class="background">
        @extends('partials.navbar');
            <p class="text">Vitamin dan Obat</p>
            <div class="search-container">
                <form action="/obatvitamin" method="GET">
                <input type="text" class="search-input" name="search" placeholder="Search...">
                <button type="submit" class="search-button"> Search </button>
                </form>
            </div>
            <p class="text1">Daftar <br> Vitamin & Obat</p>
            <hr class="fancy">
            <div class="container">
                <div class="row">
                    @foreach ($obatvitamin as $index => $obatvitamins)
                        <div class="col-md-4 mt-40" >
                            <div class="card">
                                <div class="picture">
                                    <img src="{{ $obatvitamins->gambar }}" alt="">
                                    <p class="teks">{{ $obatvitamins->nama }}</p>
                                    <button class="buy-button"onclick="openPopup({{ $index }})">Detail</button>
                                </div>
                            </div>
                            <div class="popup" id="popup{{ $index + 1 }}">
                                <div class="content">
                                    <span class="close" onclick="closePopup({{ $index }})">&times;</span>
                                    <center><img src="{{ $obatvitamins->gambar }}" alt=""></center>
                                    <h2><center>{{ $obatvitamins->nama }}</center></h2>
                                    <p class="keterangan"> Deskripsi Obat: </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->deskripsi }} <br></p>
                                    <p class="keterangan"> Dosis Dewasa : </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->obat_dewasa }} <br></p>
                                    <p class="keterangan"> Dosis Anak   : </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->obat_anak }} <br></p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
                <div class="footer-basic">
                    <footer>
                        <section id="aboutus">
                            <div class="container" data-aos="fade-up">
                                <div class="section-title">
                                  <center><h2 class="team"> OUR TEAM </h2> </center>
                                  <hr>
                                </div>
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
                                        <span>NIM: 221401037</span>
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
                                            <img src="gambar/footer/nirmala.jpg" alt="nirmala" class="img-fluid">
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
