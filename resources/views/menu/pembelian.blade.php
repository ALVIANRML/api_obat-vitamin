<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">;
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">
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
              <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45">
            </nav>

            <p class="text">
                    Pembelian Vitamin dan Obat
            </p>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="button" class="search-button"> Search </button>
            </div>
        </div>



            <p class="text1">
                Daftar Pembelian <br> Vitamin & Obat
            </p>
            <hr class="fancy">
            @foreach ($vitality as $vitalitys )
            <div class="container">
                <!-- Kolom 1 -->
                <div class="column">
                  <div class="box">
                        <div class="picture">
                            <p class="teks">
                                {{-- Nama obat:{{ $vitalitys->obatvitamin_id }}
                                <br>
                                Nama penyakit:{{ $vitalitys->penyakit_id }} --}}
                            </p>
                                <div class="beli"> BELI </div>
                        </div>
                  </div>
            @endforeach

              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
              </div>

              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
              </div>

              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
              </div>

              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
              </div>

            </div>

            <!-- Kolom 2 -->
            <div class="column">
              <!-- Kotak 6 -->
              <div class="box">
                <div class="picture">
                <p class="teks"> Vitamin & Obat </p>
                <div class="beli"> BELI </div>
                </div>
            </div>
              <!-- Kotak 7 -->
              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
              </div>
              <!-- Kotak 8 -->
              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
              </div>
              <!-- Kotak 9 -->
              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
              </div>
              <!-- Kotak 10 -->
              <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <!-- ... dan seterusnya -->
        </div>

        <!-- Kolom 3 -->
        <div class="column">
            <!-- Kotak 11 -->
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <!-- Kotak 12 -->
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>

        </div>

        <!-- Kolom 4 -->
        <div class="column">
            <!-- Kotak 13 -->
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <!-- Kotak 14 -->
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>

        </div>

        <!-- Kolom 5 -->
        <div class="column">
            <!-- Kotak 15 -->
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>

            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>
            <div class="box">
                <div class="picture">
                    <p class="teks"> Vitamin & Obat </p>
                    <div class="beli"> BELI </div>
                </div>
            </div>

            </div>
          </div>

    </div>
</body>
</html>
