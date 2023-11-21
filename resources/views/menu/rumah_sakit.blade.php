<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="/css/rumahsakit.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">
    <title> Rumah Sakit • Vitality </title>
</head>

<body>
        <nav class="navbar sticky-top bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/menu">
                <img src="gambar/Logo Navbar.png" alt="Vitality" width="135" height="55">
              </a>
              <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45">
            </nav>
            <div class="background">
                <p class="text"> Rumah Sakit Terdekat </p>

                <div class="container1">
                    <div class="location-container">
                        <button class="locationBtn" id="locationBtn">Izin Lokasi</button>
                    </div>
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search...">
                        <button type="button" class="search-button"> Search </button>
                    </div>
                </div>

                <p class="text2"> Daftar Rumah Sakit </p>
                <hr class="fancy">

                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const locationBtn = document.getElementById("locationBtn");
                    const searchBtn = document.getElementById("searchBtn");

                    locationBtn.addEventListener("click", requestLocationPermission);
                    searchBtn.addEventListener("click", performSearch);

                    function requestLocationPermission() {
                        // Place your code to request location permission here
                        alert("Location permission requested!");
                    }

                    function performSearch() {
                        const searchInput = document.getElementById("searchInput").value;
                        // Place your code to handle the search action here
                        alert(`Performing search for: ${searchInput}`);
                    }

                });

                </script>
                <!--
                <div class="search-container">
                    <form id="locationForm">
                        <input type="text" id="searchInput" placeholder="Cari Rumah Sakit...">
                        <button type="button" onclick="requestLocationPermission()">Izinkan Lokasi</button>
                      </form>
                </div>

                  <script>
                    function requestLocationPermission() {
                        // Minta izin lokasi menggunakan API Geolocation
                        if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(
                          function(position) {
                            // Proses posisi pengguna (misalnya, tampilkan informasi, kirim ke server, dll.)
                            alert("Izin diberikan! Koordinat lokasi: " + position.coords.latitude + ", " + position.coords.longitude);
                        },
                          function(error) {
                            // Tangani kesalahan saat meminta izin
                            alert("Gagal mendapatkan izin lokasi: " + error.message);
                          }
                          );
                      } else {
                        // Handle jika Geolocation tidak didukung
                        alert("Geolocation tidak didukung oleh browser Anda.");
                      }
                    }
                  </script>
             -->

            <div class="container">
                <!-- Kolom 1 -->
                <div class="column">
                <!-- Kotak 1 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 2 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 3 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>

                <!-- Kolom 1 -->
                <div class="column">
                <!-- Kotak 1 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 2 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 3 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- ... dan seterusnya -->
                </div>

                <!-- Kolom 2 -->
                <div class="column">
                <!-- Kotak 4 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 5 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 6 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- ... dan seterusnya -->
                </div>
            </div>

                <div class="column">
                <!-- Kotak 4 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 5 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 6 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- ... dan seterusnya -->
                <div class="column">
                <!-- Kotak 4 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 5 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 6 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- ... dan seterusnya -->
                <div class="column">
                <!-- Kotak 4 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 5 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- Kotak 6 -->
                <div class="box">
                    <div class="picture"></div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit </p>
                    </div>
                </div>
                <!-- ... dan seterusnya -->


            </div>
</body>
</html>
