<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/pembelian.css">
    <title> Vitamin dan Obat • Vitality </title>
</head>
<body>
    <div class="background">
        @extends('partials.navbar');

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
                            <div class="card" ">
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
                                    <p class="keterangan"> Deskripsi Obat: </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->deskripsi }} <br></p>
                                    <p class="keterangan"> Dosis Dewasa : </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->obat_dewasa }} <br></p>
                                    <p class="keterangan"> Dosis Anak   : </p>
                                    <p class="keterangan-isi">{{ $obatvitamins->obat_anak }} <br></p>
                                    <label for="quantity{{ $obatvitamins->id }}">Kuantitas:</label>
                        <input type="number" id="quantity{{ $obatvitamins->id }}" class="quantity-input" value="1" min="1" onchange="calculateTotal(10000000000, 'quantity{{ $obatvitamins->id }}', 'total-price3')">
                                    <p class="keterangan"> Harga   : </p>
                                    <p id="total-price{{ $obatvitamins->id }}" class="keterangan-isi">Rp. {{ $obatvitamins->harga }} <br></p>
                                    <div class="button-container">
                                        <button class="buy-button" onclick="buyItem()"> keranjang</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
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
            <script>
                function calculateTotal(pricePerItem, quantityInputId, totalPriceId) {
                    // Dapatkan nilai kuantitas dari elemen input
                    var quantity = document.getElementById(quantityInputId).value;

                    // Hitung total harga
                    var total = pricePerItem * quantity;

                    // Setel nilai total harga ke elemen output
                    document.getElementById(totalPriceId).innerText = 'Rp. ' + total;
                }
            </script>

</body>
</html>
