<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Poppins:ital,wght@0,200;0,400;0,600;0,700;0,800;1,400;1,700&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/keranjang.css">
    <title> Keranjang • Vitality </title>
</head>
<body>
    <div class="background">
        <nav class="navbar sticky-top bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/menu">
                    <img src="{{ asset('gambar/Logo Navbar.png') }}" alt="Vitality" width="135" height="55">
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
                                Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>



        {{-- <p class="text1"> {{ $obatvitamin->nama }} </p>
        <div class="container">
            <div class="picture">
                <img class="picture" src="{{  asset ($obatvitamin->gambar)}}" alt="">
            </div> --}}
<h5 class="card-title">Detail pesanan</h5>
<table>
    <tr>
        <td>nama</td>
        <td> :{{ $order->name }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td> :{{ $order->phone }}</td>
    </tr>
    <tr>
        <td>address</td>
        <td> :{{ $order->address }}</td>
    </tr>
    <tr>
        <td>quantity</td>
        <td> :{{ $order->quantity }}</td>
    </tr>
    <tr>
        <td>total harga</td>
        <td> :{{ $order->total_price }}</td>
    </tr>
</table>
<button class="btn btn-primary">bayar sekarang</button>

            </div>
        </div>

    {{-- <!-- Modal untuk pembayaran -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/2560px-Logo_ovo_purple.svg.png" alt="ovo" class="img-thumbnail">
                        </div>
                        <div class="col">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Shopee.svg/1200px-Shopee.svg.png" alt="shopee" class="img-thumbnail">
                        </div>
                        <div class="col">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png" alt="dana" class="img-thumbnail">
                        </div>
                    </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <!-- Tombol untuk mengonfirmasi pembayaran bisa ditambahkan di sini -->
                </div>
            </div>
        </div>
    </div> --}}

</div>

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
                            <img src="{{ asset('gambar/footer/virgie.jpg') }}" alt="Virgie" class="img-fluid">
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
                            <img src="{{ asset('gambar/footer/alvian.jpg') }}" alt="Alvian" class="img-fluid">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
