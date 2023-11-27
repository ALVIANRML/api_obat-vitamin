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
              <a class="navbar-brand" href="http://127.0.0.1:8000/menu">
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

            <div class="grid-container">
                <div class="card" onclick="openPopup(1)">
                    <div class="picture" img>
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/ZAGU2gvYEztGzauofwROf2J3mwcPMJZ9Bth4xPvY.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Siti Hajar </p>
                    </div>
                </div>
                <!-- Kotak 2 -->
                <div class="card" onclick="openPopup(2)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMJZ7mzc2HzXDbIPcvvwh4GBVlethr-_peHnc1C=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit MITRA MEDIKA Premiere.                        </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(3)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipN9dCViBBe7znBOytnvNyH158GuITaGDwlf1M5U=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Umum Pusat H. Adam Malik </p>
                    </div>
                </div>
                <!-- Kotak 2 -->
                <div class="card" onclick="openPopup(4)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMHQePLoIwE-5PbWEnVRmiuJy8HaNzfMglM7LEO=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSU Murni Teguh Methodist Susanna Wesley </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(5)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipPUMtiQnYodxEDemLEdzDiZe1j5SlYb9iEE-b0=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RS Advent Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(6)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNLTo5iDoWdNOoU2P8qsWSjR5jCqJprrokPPxUE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Umum Bina Kasih</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(7)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/proxy/ZFA_tD4kLqEhJ9UAksW-6kuse12NZI5USKxm9sRcJ_mmUsLW2pwEARx7B2wrIU1JhxidT1XdgTUZ3WgZV74-yQYf_i_dP3C0zLboPRiXZM2ytX01Zk1L57uc7XXFzF1_WU0XaUPwZd0Mq-r3UHPTmvf6GwHar7iJjz7IDA=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Umum (RSU) Sarah Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(8)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipN81CDEzPi53WdtDZm2wYIC-6mU_JJqUHzPc5SD=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Umum Mitra Sejati </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(9)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipPibGmV7Pz6sQHd8AZ-6maBxSzYsKacSYqJ-hQ5=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Murni Teguh Memorial </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(10)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipP9dSbMt0DwS4IHcekvnILcrbuODcS0YiLH1euR=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Umum Martha Friska Multatuli </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(11)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMgnx7McKDrTKvaHEYy4XBlLo9PrhRE_QZ7CChm=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Umum Herna </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(12)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/gps-proxy/AFm_dcQaOsc8sLOn-7c551l1l6WAHhaVmMXoRrPqMhNbNn5xyIXff9q9A5Z6DF43vHrprH9NrpQ8lXCSw4-fFnF6wcX3SlRevueYcXU_G3qAR6bQfYwumQ67jABuQZoKBXTn1LCRGb0k20vaT1dwl7KE8GnY9JpBdUW3vmqC2Sg0YcY-X56ZOQxgXSE5EzsFoiqbaLgvbQ=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Islam Malahayati </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(13)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNroPAevQGQYvVAUndR7PULAWY2r64iIjpAw4bB=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSU Madani </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(14)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Putri Hijau</p>
                    </div>
                </div>

            </div>

                <div class="popup" id="popup1">
                    <div class="content">
                        <span class="close" onclick="closePopup(1)">&times;</span>
                        <div class="popup-body">
                            <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/ZAGU2gvYEztGzauofwROf2J3mwcPMJZ9Bth4xPvY.jpg" alt="Rumah Sakit" class="popup-img">
                            <div class="popup-text">
                                <h2> Rumah Sakit Siti Hajar </h2>
                                <p>Alamat: Jalan Contoh No. 123</p>
                                <p>No. Rumah Sakit: 123-456789</p>
                                <p>Maps:</p>
                            </div>
                        </div>
                    </div>
                </div>


                      <div class="popup" id="popup2">
                        <div class="content">
                            <span class="close" onclick="closePopup(2)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipMJZ7mzc2HzXDbIPcvvwh4GBVlethr-_peHnc1C=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit MITRA MEDIKA Premiere. </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup3">
                        <div class="content">
                            <span class="close" onclick="closePopup(3)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipN9dCViBBe7znBOytnvNyH158GuITaGDwlf1M5U=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Pusat H. Adam Malik </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup4">
                        <div class="content">
                            <span class="close" onclick="closePopup(4)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipMHQePLoIwE-5PbWEnVRmiuJy8HaNzfMglM7LEO=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2>  RSU Murni Teguh Methodist Susanna Wesley  </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup5">
                        <div class="content">
                            <span class="close" onclick="closePopup(5)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipPUMtiQnYodxEDemLEdzDiZe1j5SlYb9iEE-b0=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> RS Advent Medan </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup6">
                        <div class="content">
                            <span class="close" onclick="closePopup(6)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipNLTo5iDoWdNOoU2P8qsWSjR5jCqJprrokPPxUE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Bina Kasih </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup7">
                        <div class="content">
                            <span class="close" onclick="closePopup(7)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/proxy/ZFA_tD4kLqEhJ9UAksW-6kuse12NZI5USKxm9sRcJ_mmUsLW2pwEARx7B2wrIU1JhxidT1XdgTUZ3WgZV74-yQYf_i_dP3C0zLboPRiXZM2ytX01Zk1L57uc7XXFzF1_WU0XaUPwZd0Mq-r3UHPTmvf6GwHar7iJjz7IDA=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum (RSU) Sarah Medan </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup8">
                        <div class="content">
                            <span class="close" onclick="closePopup(8)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipN81CDEzPi53WdtDZm2wYIC-6mU_JJqUHzPc5SD=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Mitra Sejati </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup9">
                        <div class="content">
                            <span class="close" onclick="closePopup(9)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipPibGmV7Pz6sQHd8AZ-6maBxSzYsKacSYqJ-hQ5=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Murni Teguh Memorial </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup10">
                        <div class="content">
                            <span class="close" onclick="closePopup(10)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipP9dSbMt0DwS4IHcekvnILcrbuODcS0YiLH1euR=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Martha Friska Multatuli </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup11">
                        <div class="content">
                            <span class="close" onclick="closePopup(11)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipMgnx7McKDrTKvaHEYy4XBlLo9PrhRE_QZ7CChm=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Herna </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup12">
                        <div class="content">
                            <span class="close" onclick="closePopup(12)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/gps-proxy/AFm_dcQaOsc8sLOn-7c551l1l6WAHhaVmMXoRrPqMhNbNn5xyIXff9q9A5Z6DF43vHrprH9NrpQ8lXCSw4-fFnF6wcX3SlRevueYcXU_G3qAR6bQfYwumQ67jABuQZoKBXTn1LCRGb0k20vaT1dwl7KE8GnY9JpBdUW3vmqC2Sg0YcY-X56ZOQxgXSE5EzsFoiqbaLgvbQ=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Islam Malahayati </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup13">
                        <div class="content">
                            <span class="close" onclick="closePopup(13)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipNroPAevQGQYvVAUndR7PULAWY2r64iIjpAw4bB=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> RSU Madani </h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup14">
                        <div class="content">
                            <span class="close" onclick="closePopup(14)">&times;</span>
                            <div class="popup-body">
                                <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Putri Hijau</h2>
                                    <p>Alamat: Jalan Contoh No. 123</p>
                                    <p>No. Rumah Sakit: 123-456789</p>
                                    <p>Maps:</p>
                                </div>
                            </div>
                        </div>
               </div>


        <script>
                function openPopup(index) {
                document.getElementById(`popup${index}`).style.display = "block";
                }

                function closePopup(index) {
                document.getElementById(`popup${index}`).style.display = "none";
                }
            </script>

            </div>
</body>
</html>
