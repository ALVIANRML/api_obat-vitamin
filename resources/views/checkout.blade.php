<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
     <script type="text/javascript"
     src="https://app.sandbox.midtrans.com/snap/snap.js"
     data-client-key="{{ config('midtrans.client_key') }}"></script>
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Poppins:ital,wght@0,200;0,400;0,600;0,700;0,800;1,400;1,700&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/keranjang.css">
    <title>Keranjang • Vitality</title>
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
                                        <button type="submit" class="dropdown-item">
                                            <span class="material-symbols-outlined"></span>
                                            Log out
                                        </button>
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

        <h5 class="card-title">Detail pesanan</h5>
        <table>
            <tr>
                <td>Nama</td>
                <td>:{{ $order->name }}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:{{ $order->phone }}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:{{ $order->address }}</td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>:{{ $order->quantity }}</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:{{ $order->total_price }}</td>
            </tr>
        </table>
        <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
    </div>

    <!-- footer -->
    <div class="footer-basic">
        <footer>
            <section id="aboutus">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <center><h2>OUR TEAM</h2></center>
                    </div>
                    <hr>
                    <div class="row">
                        <!-- Team member 1 -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-center">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <a href="https://www.instagram.com/virgiebeatrice/">
                                        <img src="{{ asset('gambar/footer/virgie.jpg') }}" alt="Virgie" class="img-fluid">
                                    </a>
                                </div>
                                <div class="member-info">
                                    <h4>Virgie Beatrice</h4>
                                    <span>NIM: 221401034</span>
                                </div>
                            </div>
                        </div>
                        <!-- Team member 2 -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-center">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <a href="https://www.instagram.com/alvianrml/">
                                        <img src="{{ asset('gambar/footer/alvian.jpg') }}" alt="Alvian" class="img-fluid">
                                    </a>
                                </div>
                                <div class="member-info">
                                    <h4>ALVIAN</h4>
                                    <span>NIM: 221401085</span>
                                </div>
                            </div>
                        </div>
                        <!-- Team member 3 -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-center">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <a href="https://www.instagram.com/niirmalaaa/">
                                        <img src="{{ asset('gambar/footer/nirmala.jpg') }}" alt="Nirmala" class="img-fluid">
                                    </a>
                                </div>
                                <div class="member-info">
                                    <h4>Nirmala Aizya Agatha Silalahi</h4>
                                    <span>NIM: 221401118</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <hr>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/">Home</a></li>
                <li class="list-inline-item"><a href="/menu">Services</a></li>
                <li class="list-inline-item"><a href="#aboutus">About Us</a></li>
                <li class="list-inline-item"><a href="#copyright">Copyright</a></li>
            </ul>
            <section id="copyright">
                <p class="copyright">Vitality © 2023</p>
            </section>
        </footer>
    </div>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>
</body>
</html>
