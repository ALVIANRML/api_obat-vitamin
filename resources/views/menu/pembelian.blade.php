<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,800;1,400&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/pembelian.css">
    <title> Vitamin dan Obat • Vitality </title>
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
                                Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>


            <p class="text">
                Vitamin dan Obat
            </p>
            <div class="search-container">
                <form action="/pembelian" method="GET">
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
                        <div class="col-md-4 mt-40" >
                            <div class="card">
                                <div class="picture">
                                    <img src="{{ $obatvitamins->gambar}}" alt="">
                                    <p class="teks">{{ $obatvitamins->nama}}</p>
                                    <p class="teks">Rp.{{ $obatvitamins->harga }}</p>
                                   <button class="buy-button"onclick="openPopup({{ $index }})">Beli</button>
                                </div>
                            </div>

                            <div class="popup" id="popup{{ $index + 1 }}">
                                <div class="content">

                                    <span class="close" onclick="closePopup({{ $index }})">&times;</span>
                                    <center><img src="{{ $obatvitamins->gambar }}" alt=""></center>

                                    <h2><center>{{ $obatvitamins->nama }}</center></h2>
                                    <p class="keterangan"> Deskripsi Obat : </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->deskripsi }} <br></p>
                                    <p class="keterangan"> Dosis Dewasa : </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->obat_dewasa }} <br></p>
                                    <p class="keterangan"> Dosis Anak   : </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->obat_anak }} <br></p>
                                    <hr class="hr">
                                    <label class="keterangan" for="quantity {{ $obatvitamins->id }}">Kuantitas : </label><br>
                                    <input type="number" id="quantity{{ $obatvitamins->id }}" class="quantity-input" value="1" min="1" onchange="calculateTotal(10000000000, 'quantity{{ $obatvitamins->id }}', 'total-price3')">
                                    <p class="keterangan"> Harga   : </p>
                                    <p id="total-price{{ $obatvitamins->id }}" class="keterangan-isi">Rp. {{ $obatvitamins->harga }} <br></p>

                                        <div class="button-container">
                                            <button class="buy-button1" onclick="buyItem()"> Keranjang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>



            <script>
                    function openPopup(index) {
                    var popup = document.getElementById(`popup${index + 1}`);
                    popup.style.display = "block";
                    document.body.style.overflow = "hidden"; // Mencegah scrolling pada latar belakang
                }

                function closePopup(index) {
                    var popup = document.getElementById(`popup${index + 1}`);
                    popup.style.display = "none";
                    document.body.style.overflow = "auto"; // Mengaktifkan scrolling kembali pada latar belakang
                }

                function calculateTotal(pricePerItem, quantityInputId, totalPriceId) {
                    // Dapatkan nilai kuantitas dari elemen input
                    var quantity = document.getElementById(quantityInputId).value;

                    // Hitung total harga
                    var total = pricePerItem * quantity;

                    // Setel nilai total harga ke elemen output
                    document.getElementById(totalPriceId).innerText = 'Rp. ' + total;
                }

                function buyItem() {
                    // Logika untuk menambahkan item ke keranjang belanja
                    console.log('Item telah ditambahkan ke keranjang!');
                    // Anda dapat menambahkan logika pengiriman data ke backend atau tindakan lain yang sesuai dengan kebutuhan aplikasi Anda.
                }


                function openPopup(index) {
                    document.getElementById(`popup${index + 1}`).style.display = "block";
                }

                function closePopup(index) {
                    document.getElementById(`popup${index + 1}`).style.display = "none";
                }

            </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
            {{-- <script>
                function calculateTotal(pricePerItem, quantityInputId, totalPriceId) {
                    // Dapatkan nilai kuantitas dari elemen input
                    var quantity = document.getElementById(quantityInputId).value;

                    // Hitung total harga
                    var total = pricePerItem * quantity;

                    // Setel nilai total harga ke elemen output
                    document.getElementById(totalPriceId).innerText = 'Rp. ' + total;
                }
            </script> --}}

</body>
</html>
