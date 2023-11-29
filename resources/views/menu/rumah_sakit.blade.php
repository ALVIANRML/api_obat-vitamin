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
                <p class="text"> Rumah Sakit </p>

                <div class="search-container">
                    <form action="/penyakit" method="GET">
                    <input type="text" class="search-input"  name="search"  placeholder="Search...">
                    <button type="submit" class="search-button"> Search </button>
                </form>
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
                        <img src="https://lh5.googleusercontent.com/p/AF1QipMfnjSjeQvbx9BJUHuaqPkDrNc7YkKlgfmrdHg=w500-h500-k-no" alt="Rumah Sakit">
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
                        <p class="text1"> Rumah Sakit MITRA MEDIKA Premiere. </p>
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
                        <img src="https://lh3.googleusercontent.com/p/AF1QipN1y7c79sR5xwxdNN2OPkWVuKZkcJe87v8CEQk=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Islam Malahayati </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(13)">
                    <div class="picture">
                        <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/235687_18-1-2020_11-43-24.jpg" alt="Rumah Sakit">
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
                <div class="card" onclick="openPopup(15)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipP69HqF-BTUKlTvyFZ5SHukABLpp5gTF4HLBhgp=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Umum Daerah Dr. Pirngadi </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(16)">
                    <div class="picture">
                        <img src="https://2.bp.blogspot.com/-k09FNsoySMU/WiRz_IaVv9I/AAAAAAAAAIM/Ie6nL68Gduwp_yDy6nkOrV4Ik36iXJOdgCLcBGAs/s640/RS%2BAmeta%2BSejahtera.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Ameta Sejahtera </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(17)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Ananda Putri </p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(18)">
                    <div class="picture">
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/oCggK4AlpxzarQQXelwS6lRTd38R2vlTM1hQuX4A.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bahagia </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(19)">
                    <div class="picture">
                        <img src="https://medanbisnisdaily.com/imagesfile/202211/20221106_154536_rumah_sakit_umum_bandung_di_jalan_medan_diserang_oknum_diduga_aparat.jpeg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bandung Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(20)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMT8qi9DehgLWWHBek48Lo5mn3XGm5AaSmyR8Po=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bedah Accuplast </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(21)">
                    <div class="picture">
                        <img src="https://karosatuklik.com/wp-content/uploads/2022/07/setia-budi.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bedah Setia Budi </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(22)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMxl8MYYVUhMU0lT_-VUK7y8e8-AcSOKoBIp6Lm=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bhakti Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(23)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOeEEaTwpuc099HiuFxb4lYrgcAgTKJX5P72po1=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bhayangkara Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(24)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipP4oh8WQZ9qk4_s97QkivD2UXHmVIYTWh6FjFMq=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bina Atma </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(25)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bina Karsa </p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(26)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipPpSoqSCJ7JdWHcBLfSWBrftrMNt6nyRBOZ1q_Y=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Bunda Thamrin </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(27)">
                    <div class="picture">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/kilat/b8d5aa050c93ce832063b2d9ae075251.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Columbia Asia Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(28)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipP9w5dIDYNWxzWrDhZ6s_gnQ2ZLCtMDobhBBb6s=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Deli Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(29)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipM7Lv3YX4KXKiMLGnwJuXIrL24HyICkg6q_XXkv=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Delima Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(30)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOjffOGDS7C4wsUl9jYOq5BgGQ1sOMFSNjTCrPt=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Dr. Abdul Malik </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(31)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNFXjBvYdXqokZyEaVggSaREd9v5l0v-DNedo1S=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Dr. Komang Makes </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(32)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Dr. Muhammad Ildrem </p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(33)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNlhy-tLxUJt5yqFdAfF738Vc_GrBJRMBv-WjqW=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Eshmun Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(34)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipP8F4NMUfWfxhqbyzt9Yy1X0HT83-0cX2WVLslU=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Estomihi Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(35)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/proxy/W7meTxU3R87J6W8m0DpJaCi6P_gm45V6Z9m3k7eqa4pwHjSEyaFPp-z09jmw0gqfAzmV-JF6x761NIlFvaZXYquwQVo6fD5cATsdzOLZn-t47V6tVosAwWblP_q71BqPUqx-zu30qm9bKaZyB-vkqBor9O-i8Ynvy2lUXg=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Fajar Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(36)">
                    <div class="picture">
                        <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/277943_26-7-2020_20-42-36.jpeg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Ginjal Rasyida</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(37)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMqdl2iasNrnYmEz4_C8_ZYcZoEBoZm4-oNL9R3=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Gran Theresia Herna </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(38)">
                    <div class="picture">
                        <img src="https://d1yc6vwxvprgjf.cloudfront.net/id/gallery_images/x_medium/1434420002/483073?1434420002" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Harapan Mama </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(39)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOE8ot-fStszVdTOtNS5nRj_ya8ZG57bE5JcYw=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Hermina Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(40)">
                    <div class="picture">
                        <img src="https://metrorakyat.com/wp-content/uploads/2020/12/IMG-20201206-WA0003.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Hisarma </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(41)">
                    <div class="picture">
                        <img src="https://ion.co.id/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-18-at-11.33.07.jpeg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Ibnu Saleh Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(42)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMlSVVHz0vlQ2owKKViBjcV2VtFyZhblDp7CZs_=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Imelda Pekerja Indonesia </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(43)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Kusta Pulau Cinayang </p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(44)">
                    <div class="picture">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipMF5CVNI8RJF2mtcXvZaSzUmo0pUBNH7t3cMzHN=w408-h306-k-no" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Mandiri Medan</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(45)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNCpn5d3KHfSx7pzQaTIqkfASYLRQaYxcFw8O7E=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Martha Friska </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(46)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Martondi </p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(47)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMbPXaQ5SWBIyX_Kw-sG2G8uAVzwLTI3TPjflLi=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Materna Medan </p>
                    </div>
                </div>
               {{--  <div class="card" onclick="openPopup(48)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Mayasari</p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(49)">
                    <div class="picture">
                        <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_360,h_240,c_fill,f_auto/v1608176798/hospital_image/c3b42f3f5617_rs%20khusus%20mata%20medan%20baru.JPG.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Medan Baru Medical </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(50)">
                    <div class="picture">
                        <img src="https://gerhanaonline.net/wp-content/uploads/2021/01/1610768408794491-0-1.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Melati </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(51)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNg2ucyF04UUNJI1ZtU0G8UxRox56udjIa4HFga=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Mencirim Tujuh-Tujuh </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(52)">
                    <div class="picture">
                        <img src="https://static.guesehat.com/static/directories_thumb/20335_Rumah_Sakit_Methodis_Medan.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Methodist Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(53)">
                    <div class="picture">
                        <img src="https://persi-sumut.com/wp-content/uploads/2023/06/foto-rs-REKAM-MEDIS-MITRA-MEDIKA-BANDAR-KLIPPA-1024x838.jpeg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Mitra Medika </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(54)">
                    <div class="picture">
                        <img src="https://asset-2.tstatic.net/medan/foto/bank/images/rumah-sakit-umum-rsu-mitra-medika-group-as.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Mitra Medika Amplas </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(55)">
                    <div class="picture">
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/GkAcUqYZobCc4C8lDpb1jJv9bLvGiD9QCh0QnMhz.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Mitra Persada</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(56)">
                    <div class="picture">
                        <img src="https://s3.ap-southeast-1.amazonaws.com/cdn.orbit/wp-content/uploads/2022/01/13152113/RSU-MUHAMMADIYAH1-1024x565.png" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Muhammadiyah Medan </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(57)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Permata Bunda Medan</p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(58)">
                    <div class="picture">
                        <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/98141_27-3-2020_11-2-17.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Prima Husada Cipta</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(59)">
                    <div class="picture">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl_UbTQ-qv5dWMbJL998rhrXE0xBjMnB8FqRhc1zYPqfbGAedquumk06QuU7pfhO4KWM8&usqp=CAU" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Prima Vision </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(60)">
                    <div class="picture">
                        <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/327303_27-4-2021_16-2-56.webp" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Prof. Dr. Boloni </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(61)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Restu Ibu </p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(62)">
                    <div class="picture">
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/OQr5A9irfTQEWReLA973WqTc94LdbKw9nc459IhE.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Ridos Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(63)">
                    <div class="picture">
                        <img src="https://cdn-healthcare.hellohealthgroup.com/hospitals/id/rs-royal-prima-medan-120220211.png" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Royal Prima </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(64)">
                    <div class="picture">
                        <img src="https://medanbisnisdaily.com/imagesfile/201708/20170815_063108_rs_elisabeth_situs_sejarah_bukti_masa_penjajahan_di_kota_medan.jpeg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Santa Elisabeth Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(65)">
                    <div class="picture">
                        <img src="https://images.bisnis.com/posts/2018/04/26/789164/rsu-sari-mutiara-sari-mutiara.ac.id-.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Sari Mutiara</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(66)">
                    <div class="picture">
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/ZHm4fjAnmuC9wINPv5Kt5vWtLtBSYLtxVsapwjSd.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Sehat Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(67)">
                    <div class="picture">
                        <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_360,h_240,c_fill,f_auto/v1505698227/hospital_image/Dhirga%20Surya%20Medan.jpg.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Siloam Dhirga Surya</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(68)">
                    <div class="picture">
                        <img src="https://rsmatasmec.com/files/uploads/seomodel/image/2023/Apr/15/643a506f970e1/dsc06671-min-1-300x200.jpg?token=4c8b3986081bd077a8f78b3889dbcd92" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit SMEC Medan</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(69)">
                    <div class="picture">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjY_Q4tnSxthO-mB2o9o_DDDSAqW3yD4Morn71j_N-qC7budCF0euSNVyMSEce10kHmkd3ZCtwFU6GUC9dAMeVR7Mx1h79LmIwcxtg4a6bh36F2ajm_dEeoPPgG-a_CpZOFgQRTsD-5A9oT1lFJxuu89MT_b4UeyJvCzhtJCI8tmlgigPj4srQwOV7C/w1200-h630-p-k-no-nu/RS%20Sufina%20Aziz%20JAdwal%20Praktik%20Dokter.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Sufina Azis </p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(70)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Sumatera Eye </p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(71)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipO7qTcywSvAN1ykOAbAdoP_sTinQovGKCIDjyD5=w1024-k" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Sundari Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(72)">
                    <div class="picture">
                        <img src="https://d1yc6vwxvprgjf.cloudfront.net/id/gallery_images/x_medium/1435727470/936458?1435727470" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Tere Margareth</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(73)">
                    <div class="picture">
                        <img src="https://konten.usu.ac.id/storage/satker/0/statis/fasilitas/rs_1.webp?w=1920&q=75" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Universitas Sumatera Utara</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(74)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOwJKrVb-5kz25jHQ3F_t3rOPLPNKmfPsUTUXHW=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Vina Estetica</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(75)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMgj3VjNJ8Cz8lJ41PYyh6foOAo35BSNM-v7Lso=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Wulan Windy </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(76)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMPRb-FDwUDv-AKs_S6U1uYRgm4prK0K6SLS1Vn=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Artha Mahinrus</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(77)">
                    <div class="picture">
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/XnKHTuyuFS6ypPuW6YD4IzZh2Zz8L6JOFIpsNO0O.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Az-Zakiyah</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(78)">
                    <div class="picture">
                        <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/300124_11-6-2020_15-33-12.jpeg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Badrul Aini</p>
                    </div>
                </div>
                {{-- <div class="card" onclick="openPopup(79)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> Rumah Sakit Ibu dan Anak Bunda Salam Medan</p>
                    </div>
                </div> --}}
                <div class="card" onclick="openPopup(80)">
                    <div class="picture">
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/M0Gh3333lkw3zYYoYvVLvYBgvmnHvLLlx4XlLKC0.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Eva Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(81)">
                    <div class="picture">
                        <img src="https://d1yc6vwxvprgjf.cloudfront.net/id/gallery_images/x_medium/1435191011/778733?1435191011" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Harapan Ibu Medan</p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(82)">
                    <div class="picture">
                        <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/UnDf7LFzqmqseZpxrOQ1ww56syEIDfUrA7jp8YjK.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Karya Jaya </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(83)">
                    <div class="picture">
                        <img src="https://static.rsmurniteguh.app/sites/Images/Content/Rosiva.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Rosiva Medan </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(84)">
                    <div class="picture">
                        <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_360,h_240,c_fill,f_auto/v1557892845/hospital_image/831dbbc387f8_RSIA%20Sri%20Ratu%20-%20depan.jpg.jpg" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA  Sri Ratu </p>
                    </div>
                </div>
                <div class="card" onclick="openPopup(85)">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipPgH7kgWkBW1U-1wk4c6bgXTNZATCKZ_JeXZPfk=s1360-w1360-h1020" alt="Rumah Sakit">
                    </div>
                    <div class="picture2">
                        <p class="text1"> RSIA Stella Maris</p>
                    </div>
                </div>

            </div>

                <div class="popup" id="popup1">
                    <div class="content">
                        <span class="close" onclick="closePopup(1)">&times;</span>
                        <div class="popup-body">
                            <div class="popup-text">
                                <h2> Rumah Sakit Siti Hajar </h2>
                                <img src="https://lh5.googleusercontent.com/p/AF1QipMfnjSjeQvbx9BJUHuaqPkDrNc7YkKlgfmrdHg=w500-h500-k-no" alt="Rumah Sakit" class="popup-img">
                                <p class="b"> Alamat </p>
                                <p> Jalan Jamin Ginting No. 2, Merdeka, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222</p>
                                <p class="b"> No. Rumah Sakit </p>
                                <p> 061-8213187 </p>
                                <p class="b"> Maps </p>
                                <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Siti%20Hajar%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                            </div>
                        </div>
                    </div>
                </div>


                      <div class="popup" id="popup2">
                        <div class="content">
                            <span class="close" onclick="closePopup(2)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit MITRA MEDIKA Premiere </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMJZ7mzc2HzXDbIPcvvwh4GBVlethr-_peHnc1C=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jl. S. Parman No.234a, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20117 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4502021 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=Rumah%20Sakit%20MITRA%20MEDIKA%20Premiere.%20&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup3">
                        <div class="content">
                            <span class="close" onclick="closePopup(3)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Pusat H. Adam Malik </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipN9dCViBBe7znBOytnvNyH158GuITaGDwlf1M5U=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Bunga Lau No.17, Kemenangan Tani, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20136</p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8360051 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSUP%20H.%20Adam%20Malik&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup4">
                        <div class="content">
                            <span class="close" onclick="closePopup(4)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> RSU Murni Teguh Methodist Susanna Wesley </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMHQePLoIwE-5PbWEnVRmiuJy8HaNzfMglM7LEO=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Harmonika Baru №17, Padang Bulan Selayang II, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20132 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8222264 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Methodist%20Susanna%20Wesley&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup5">
                        <div class="content">
                            <span class="close" onclick="closePopup(5)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Advent Medan  </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipPUMtiQnYodxEDemLEdzDiZe1j5SlYb9iEE-b0=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Gatot Subroto №4, Sei Sikambing D, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4524875 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Advent%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup6">
                        <div class="content">
                            <span class="close" onclick="closePopup(6)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Bina Kasih </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipNLTo5iDoWdNOoU2P8qsWSjR5jCqJprrokPPxUE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan T.B Simatupang №148, Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20127 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8475111</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bina%20Kasih&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup7">
                        <div class="content">
                            <span class="close" onclick="closePopup(7)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum (RSU) Sarah Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/proxy/ZFA_tD4kLqEhJ9UAksW-6kuse12NZI5USKxm9sRcJ_mmUsLW2pwEARx7B2wrIU1JhxidT1XdgTUZ3WgZV74-yQYf_i_dP3C0zLboPRiXZM2ytX01Zk1L57uc7XXFzF1_WU0XaUPwZd0Mq-r3UHPTmvf6GwHar7iJjz7IDA=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Baja Raya №10, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20111 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4568383</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Sarah%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup8">
                        <div class="content">
                            <span class="close" onclick="closePopup(8)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Mitra Sejati </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipN81CDEzPi53WdtDZm2wYIC-6mU_JJqUHzPc5SD=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Jend. A.H. Nasution №7, Pangkalan Mansyur, Kec. Medan Johor, Kota Medan, Sumatera Utara 20219 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7875967</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Mitra%20Sejati&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup9">
                        <div class="content">
                            <span class="close" onclick="closePopup(9)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Murni Teguh Memorial </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipPibGmV7Pz6sQHd8AZ-6maBxSzYsKacSYqJ-hQ5=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Jawa №2, Gang Buntu, Kec. Medan Timur, Kota Medan, Sumatera Utara 20231</p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-80501888 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Murni%20Teguh%20Memorial&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup10">
                        <div class="content">
                            <span class="close" onclick="closePopup(10)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Martha Friska Multatuli </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipP9dSbMt0DwS4IHcekvnILcrbuODcS0YiLH1euR=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Multatuli №1, Aur, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20212 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4149666 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Martha%20Friska%20Multatuli&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup11">
                        <div class="content">
                            <span class="close" onclick="closePopup(11)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Herna </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMgnx7McKDrTKvaHEYy4XBlLo9PrhRE_QZ7CChm=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Mojopahit №118, Petisah Hulu, Kec. Medan Baru, Kota Medan, Sumatera Utara 20152 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4510766 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Herna%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup12">
                        <div class="content">
                            <span class="close" onclick="closePopup(12)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Islam Malahayati </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipN1y7c79sR5xwxdNN2OPkWVuKZkcJe87v8CEQk=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p>	Jalan Pangeran Diponegoro №2, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112</p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4519474 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Islam%20Malahayati&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup13">
                        <div class="content">
                            <span class="close" onclick="closePopup(13)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> RSU Madani </h2>
                                    <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/235687_18-1-2020_11-43-24.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Arief Rahman Hakim №168, Sukaramai I, Kec. Medan Area, Kota Medan, Sumatera Utara 20227 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7345911</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Madani%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup14">
                        <div class="content">
                            <span class="close" onclick="closePopup(14)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Putri Hijau</h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Putri Hijau №17, Kesawan, Kec. Medan Barat, Kota Medan, Sumatera Utara 20111 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4553900 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Putri%20Hijau%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup15">
                        <div class="content">
                            <span class="close" onclick="closePopup(15)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Umum Daerah Dr. Pirngadi </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipP69HqF-BTUKlTvyFZ5SHukABLpp5gTF4HLBhgp=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Prof. HM. Yamin №47, Perintis, Kec. Medan Timur, Kota Medan, Sumatera Utara 20234 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4158701 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSUD%20Dr.%20Pirngadi&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup16">
                        <div class="content">
                            <span class="close" onclick="closePopup(16)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ameta Sejahtera </h2>
                                    <img src="https://2.bp.blogspot.com/-k09FNsoySMU/WiRz_IaVv9I/AAAAAAAAAIM/Ie6nL68Gduwp_yDy6nkOrV4Ik36iXJOdgCLcBGAs/s640/RS%2BAmeta%2BSejahtera.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Simpang Kantor №6, Martubung, Kec. Medan Labuhan, Kota Medan, Sumatera Utara 20252 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6857244 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Ameta%20Sejahtera%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      {{-- <div class="popup" id="popup17">
                        <div class="content">
                            <span class="close" onclick="closePopup(17)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ananda Putri </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Jamin Ginting №78, Kwala Bekala, Kec. Medan Johor, Kota Medan, Sumatera Utara 20131 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Ananda%20Putri%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div> --}}

                      <div class="popup" id="popup18">
                        <div class="content">
                            <span class="close" onclick="closePopup(18)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bahagia </h2>
                                    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/oCggK4AlpxzarQQXelwS6lRTd38R2vlTM1hQuX4A.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Bahagia №85, Teladan Timur, Kec. Medan Kota, Kota Medan, Sumatera Utara 20217 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7360947</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bahagia%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup19">
                        <div class="content">
                            <span class="close" onclick="closePopup(19)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bandung Medan </h2>
                                    <img src="https://medanbisnisdaily.com/imagesfile/202211/20221106_154536_rumah_sakit_umum_bandung_di_jalan_medan_diserang_oknum_diduga_aparat.jpeg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Mistar №39, Sei Putih Barat, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> +62 61 4567993 <br> +62 61 2247514 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bandung%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup20">
                        <div class="content">
                            <span class="close" onclick="closePopup(20)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bedah Accuplast </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMT8qi9DehgLWWHBek48Lo5mn3XGm5AaSmyR8Po=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Sei Bahbolon №40, Babura, Kec. Medan Baru, Kota Medan, Sumatera Utara 20153 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4153054</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bedah%20Accuplast%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup21">
                        <div class="content">
                            <span class="close" onclick="closePopup(21)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bedah Setia Budi </h2>
                                    <img src="https://karosatuklik.com/wp-content/uploads/2022/07/setia-budi.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Mesjid №3, Tanjung Rejo, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20154 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8220996 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bedah%20Setia%20Budi&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup22">
                        <div class="content">
                            <span class="close" onclick="closePopup(22)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bhakti Medan</h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMxl8MYYVUhMU0lT_-VUK7y8e8-AcSOKoBIp6Lm=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan HM. Joni №64, Teladan Timur, Kec. Medan Kota, Kota Medan, Sumatera Utara 20216 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7366588 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bhakti%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup23">
                        <div class="content">
                            <span class="close" onclick="closePopup(23)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bhayangkara Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOeEEaTwpuc099HiuFxb4lYrgcAgTKJX5P72po1=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan K.H. Wahid Hasyim №1, Merdeka, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8220812</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bhayangkara%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup24">
                        <div class="content">
                            <span class="close" onclick="closePopup(24)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bina Atma </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipP4oh8WQZ9qk4_s97QkivD2UXHmVIYTWh6FjFMq=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan HOS. Cokroaminoto №122, Pandau Hulu II, Kec. Medan Area, Kota Medan, Sumatera Utara 20211 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 0821-6300-0880 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bina%20Atma&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>
{{--
                      <div class="popup" id="popup25">
                        <div class="content">
                            <span class="close" onclick="closePopup(25)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bina Karsa </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Pales III №19, Simpang Selayang, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20135 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bina%20Karsa&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div> --}}

                      <div class="popup" id="popup26">
                        <div class="content">
                            <span class="close" onclick="closePopup(26)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Bunda Thamrin </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipPpSoqSCJ7JdWHcBLfSWBrftrMNt6nyRBOZ1q_Y=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Sei Batang Hari №28, Babura Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20112 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 0853-5947-3042 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bunda%20Thamrin&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup27">
                        <div class="content">
                            <span class="close" onclick="closePopup(27)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Columbia Asia Medan </h2>
                                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/kilat/b8d5aa050c93ce832063b2d9ae075251.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Listrik №2, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4566368 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Columbia%20Asia%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup28">
                        <div class="content">
                            <span class="close" onclick="closePopup(28)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Deli Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipP9w5dIDYNWxzWrDhZ6s_gnQ2ZLCtMDobhBBb6s=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Merbabu №18, Pusat Pasar, Kec. Medan Kota, Kota Medan, Sumatera Utara 20212 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4565229 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Deli%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup29">
                        <div class="content">
                            <span class="close" onclick="closePopup(29)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Delima Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipM7Lv3YX4KXKiMLGnwJuXIrL24HyICkg6q_XXkv=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Kol. Yos Sudarso №19, Martubung, Kec. Medan Labuhan, Kota Medan, Sumatera Utara 20251 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6855195 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Delima%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup30">
                        <div class="content">
                            <span class="close" onclick="closePopup(30)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Dr. Abdul Malik </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOjffOGDS7C4wsUl9jYOq5BgGQ1sOMFSNjTCrPt=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Imam Bonjol №50, Suka Damai, Kec. Medan Polonia, Kota Medan, Sumatera Utara 20157 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4572323 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Dr.%20Abdul%20Malik&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup31">
                        <div class="content">
                            <span class="close" onclick="closePopup(31)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Dr. Komang Makes </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipNFXjBvYdXqokZyEaVggSaREd9v5l0v-DNedo1S=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Bengkalis №1, Belawan I, Kec. Medan Belawan, Kota Medan, Sumatera Utara 20411 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6941741 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Dr.%20Komang%20Makes&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      {{-- <div class="popup" id="popup32">
                        <div class="content">
                            <span class="close" onclick="closePopup(32)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Dr. Muhammad Ildrem </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Tali Air №21, Mangga, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20141 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Dr.%20Muhammad%20Ildrem&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="popup" id="popup33">
                        <div class="content">
                            <span class="close" onclick="closePopup(33)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Eshmun Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipNlhy-tLxUJt5yqFdAfF738Vc_GrBJRMBv-WjqW=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Marelan Raya №173, Tanah Enam Ratus, Kec. Medan Marelan, Kota Medan, Sumatera Utara 20244 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-88818000 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Eshmun%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup34">
                        <div class="content">
                            <span class="close" onclick="closePopup(34)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Estomihi Medan </h2>
                                        <img src="https://lh3.googleusercontent.com/p/AF1QipP8F4NMUfWfxhqbyzt9Yy1X0HT83-0cX2WVLslU=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                        <p class="b"> Alamat </p>
                                        <p> Jalan Sisingamangaraja №235, Sudirejo II, Kec. Medan Kota, Kota Medan, Sumatera Utara 20217 </p>
                                        <p class="b"> No. Rumah Sakit </p>
                                        <p> 061-7861771 </p>
                                        <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Estomihi%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup35">
                        <div class="content">
                            <span class="close" onclick="closePopup(35)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Fajar Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/proxy/W7meTxU3R87J6W8m0DpJaCi6P_gm45V6Z9m3k7eqa4pwHjSEyaFPp-z09jmw0gqfAzmV-JF6x761NIlFvaZXYquwQVo6fD5cATsdzOLZn-t47V6tVosAwWblP_q71BqPUqx-zu30qm9bKaZyB-vkqBor9O-i8Ynvy2lUXg=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Cempaka №35, Sari Rejo, Kec. Medan Polonia, Kota Medan, Sumatera Utara 20158 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7853738 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=%09RS%20Fajar%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup36">
                        <div class="content">
                            <span class="close" onclick="closePopup(36)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ginjal Rasyida</h2>
                                    <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/277943_26-7-2020_20-42-36.jpeg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Mayjen DI. Panjaitan №144, Sei Sikambing D, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20111 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4151144 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Ginjal%20Rasyida&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup37">
                        <div class="content">
                            <span class="close" onclick="closePopup(37)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Gran Theresia Herna</h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMqdl2iasNrnYmEz4_C8_ZYcZoEBoZm4-oNL9R3=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Tapian Nauli №8, Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8459900 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Gran%20Theresia%20Herna&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup38">
                        <div class="content">
                            <span class="close" onclick="closePopup(38)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Harapan Mama </h2>
                                    <img src="https://d1yc6vwxvprgjf.cloudfront.net/id/gallery_images/x_medium/1434420002/483073?1434420002" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Menteng VII №108, Medan Tenggara, Kec. Medan Denai, Kota Medan, Sumatera Utara 20228 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> +62 61 7883064 <br> +62 61 7883089 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Harapan%20Mama&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup39">
                        <div class="content">
                            <span class="close" onclick="closePopup(39)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Hermina Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOE8ot-fStszVdTOtNS5nRj_ya8ZG57bE5JcYw=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Asrama №34, Sei Sikambing C II, Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20123 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-80862525 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Hermina%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup40">
                        <div class="content">
                            <span class="close" onclick="closePopup(40)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Hisarma </h2>
                                    <img src="https://metrorakyat.com/wp-content/uploads/2020/12/IMG-20201206-WA0003.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Jend. Gatot Subroto №128, Sei Sikambing C II, Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20123 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4536868 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Hisarma&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup41">
                        <div class="content">
                            <span class="close" onclick="closePopup(41)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibnu Saleh Medan </h2>
                                    <img src="https://ion.co.id/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-18-at-11.33.07.jpeg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan HM. Joni №63, Pasar Merah Timur, Kec. Medan Area, Kota Medan, Sumatera Utara 20216 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 61.7342241  </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Ibnu%20Saleh%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup42">
                        <div class="content">
                            <span class="close" onclick="closePopup(42)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Imelda Pekerja Indonesia </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMlSVVHz0vlQ2owKKViBjcV2VtFyZhblDp7CZs_=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Bilal №24, Pulo Brayan Darat I, Kec. Medan Timur, Kota Medan, Sumatera Utara 20239 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6610072 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Imelda%20Pekerja%20Indonesia&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      {{-- <div class="popup" id="popup43">
                        <div class="content">
                            <span class="close" onclick="closePopup(43)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Kusta Pulau Cinayang </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Pulau Sicanang №61, Bagan Deli, Kec. Medan Belawan, Kota Medan, Sumatera Utara 20411 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Kusta%20Pulau%20Cinayang&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div> --}}

                      <div class="popup" id="popup44">
                        <div class="content">
                            <span class="close" onclick="closePopup(44)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Mandiri Medan</h2>
                                    <img src="https://lh5.googleusercontent.com/p/AF1QipMF5CVNI8RJF2mtcXvZaSzUmo0pUBNH7t3cMzHN=w408-h306-k-no" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Kapten Maulana Lubis №8, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20236 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-77239274 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Mandiri%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup45">
                        <div class="content">
                            <span class="close" onclick="closePopup(45)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Martha Friska </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipNCpn5d3KHfSx7pzQaTIqkfASYLRQaYxcFw8O7E=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Kol. Yos Sudarso №91, Tanjung Mulia, Kec. Medan Deli, Kota Medan, Sumatera Utara 20239 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6610910 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Martha%20Friska&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>                                </div>
                            </div>
                        </div>
               </div>

                      {{-- <div class="popup" id="popup46">
                        <div class="content">
                            <span class="close" onclick="closePopup(46)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Martondi </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Letda Sujono №60, Bandar Selamat, Kec. Medan Tembung, Kota Medan, Sumatera Utara 20223 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Martondi&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div> --}}

                      <div class="popup" id="popup47">
                        <div class="content">
                            <span class="close" onclick="closePopup(47)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Materna Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMbPXaQ5SWBIyX_Kw-sG2G8uAVzwLTI3TPjflLi=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Teuku Umar №9, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4514222 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Materna%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      {{-- <div class="popup" id="popup48">
                        <div class="content">
                            <span class="close" onclick="closePopup(48)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Mayasari </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Marelan Raya №187, Tanah Enam Ratus, Kec. Medan Marelan, Kota Medan, Sumatera Utara 20243 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Mayasari&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                      <div class="popup" id="popup49">
                        <div class="content">
                            <span class="close" onclick="closePopup(49)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Medan Baru Medical </h2>
                                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_360,h_240,c_fill,f_auto/v1608176798/hospital_image/c3b42f3f5617_rs%20khusus%20mata%20medan%20baru.JPG.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Abdullah Lubis №67, Merdeka, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 0813-6134-2558</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Medan%20Baru%20Medical&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup50">
                        <div class="content">
                            <span class="close" onclick="closePopup(50)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Melati </h2>
                                    <img src="https://gerhanaonline.net/wp-content/uploads/2021/01/1610768408794491-0-1.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Deli №115, Belawan I, Kec. Medan Belawan, Kota Medan, Sumatera Utara 20411 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7990056 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Melati&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup51">
                        <div class="content">
                            <span class="close" onclick="closePopup(51)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Mencirim Tujuh-Tujuh </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipNg2ucyF04UUNJI1ZtU0G8UxRox56udjIa4HFga=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Sei Mencirim №77, Babura, Kec. Medan Baru, Kota Medan, Sumatera Utara 20154 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4522886 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=%09RS%20Mencirim%20Tujuh-Tujuh&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup52">
                        <div class="content">
                            <span class="close" onclick="closePopup(52)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Methodist Medan </h2>
                                    <img src="https://static.guesehat.com/static/directories_thumb/20335_Rumah_Sakit_Methodis_Medan.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan MH. Thamrin №105, Sei Rengas Permata, Kec. Medan Area, Kota Medan, Sumatera Utara 20211 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7369000 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Methodist%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup53">
                        <div class="content">
                            <span class="close" onclick="closePopup(53)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Mitra Medika </h2>
                                    <img src="https://persi-sumut.com/wp-content/uploads/2023/06/foto-rs-REKAM-MEDIS-MITRA-MEDIKA-BANDAR-KLIPPA-1024x838.jpeg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Kol. Yos Sudarso №7, Tanjung Mulia, Kec. Medan Deli, Kota Medan, Sumatera Utara 20241 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6642238 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Mitra%20Medika&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup54">
                        <div class="content">
                            <span class="close" onclick="closePopup(54)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit  Mitra Medika Amplas </h2>
                                    <img src="https://asset-2.tstatic.net/medan/foto/bank/images/rumah-sakit-umum-rsu-mitra-medika-group-as.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Sisingamangaraja №11, Harjosari I, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20148 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7879070 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Mitra%20Medika%20Amplas&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup55">
                        <div class="content">
                            <span class="close" onclick="closePopup(55)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Mitra Persada</h2>
                                    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/GkAcUqYZobCc4C8lDpb1jJv9bLvGiD9QCh0QnMhz.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Jamin Ginting №166, Mangga, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20135 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8368504 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Mitra%20Persada&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup56">
                        <div class="content">
                            <span class="close" onclick="closePopup(56)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Muhammadiyah Medan </h2>
                                    <img src="https://s3.ap-southeast-1.amazonaws.com/cdn.orbit/wp-content/uploads/2022/01/13152113/RSU-MUHAMMADIYAH1-1024x565.png" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Mandala By Pass №27, Tegal Sari Mandala I, Kec. Medan Denai, Kota Medan, Sumatera Utara 20223 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7348222 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Muhammadiyah%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--
                      <div class="popup" id="popup57">
                        <div class="content">
                            <span class="close" onclick="closePopup(57)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Permata Bunda Medan</h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Sisingamangaraja №7, Mesjid, Kec. Medan Kota, Kota Medan, Sumatera Utara 20212 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Permata%20Bunda%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                      <div class="popup" id="popup58">
                        <div class="content">
                            <span class="close" onclick="closePopup(58)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Prima Husada Cipta</h2>
                                    <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/98141_27-3-2020_11-2-17.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Stasiun №92, Belawan Bahagia, Kec. Medan Belawan, Kota Medan, Sumatera Utara 20411 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6941927 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Prima%20Husada%20Cipta&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup59">
                        <div class="content">
                            <span class="close" onclick="closePopup(59)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Prima Vision </h2>
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl_UbTQ-qv5dWMbJL998rhrXE0xBjMnB8FqRhc1zYPqfbGAedquumk06QuU7pfhO4KWM8&usqp=CAU" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Pabrik Tenun №51, Sei Putih Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20114 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-80514888 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Prima%20Vision&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup60">
                        <div class="content">
                            <span class="close" onclick="closePopup(60)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Prof. Dr. Boloni </h2>
                                    <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/327303_27-4-2021_16-2-56.webp" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Mongonsidi №11, Polonia, Kec. Medan Polonia, Kota Medan, Sumatera Utara 20157 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 0812-6013-1946</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Prof.%20Dr.%20Boloni&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      {{-- <div class="popup" id="popup61">
                        <div class="content">
                            <span class="close" onclick="closePopup(61)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Restu Ibu </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Gatot Subroto №434, Cinta Damai, Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20126 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Restu%20Ibu&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                      <div class="popup" id="popup62">
                        <div class="content">
                            <span class="close" onclick="closePopup(62)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ridos Medan </h2>
                                    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/OQr5A9irfTQEWReLA973WqTc94LdbKw9nc459IhE.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Menteng VII №62, Medan Tenggara, Kec. Medan Denai, Kota Medan, Sumatera Utara 20228 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7881406 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Ridos%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup63">
                        <div class="content">
                            <span class="close" onclick="closePopup(63)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Royal Prima </h2>
                                    <img src="https://cdn-healthcare.hellohealthgroup.com/hospitals/id/rs-royal-prima-medan-120220211.png" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Ayahanda №68, Sei Putih Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8881377 <br> +62 852 6130 3150 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Royal%20Prima&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup64">
                        <div class="content">
                            <span class="close" onclick="closePopup(64)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Santa Elisabeth Medan </h2>
                                    <img src="https://medanbisnisdaily.com/imagesfile/201708/20170815_063108_rs_elisabeth_situs_sejarah_bukti_masa_penjajahan_di_kota_medan.jpeg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan H. Misbah №7, Jati, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20151 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4144737 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Santa%20Elisabeth%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup65">
                        <div class="content">
                            <span class="close" onclick="closePopup(65)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Sari Mutiara</h2>
                                    <img src="https://images.bisnis.com/posts/2018/04/26/789164/rsu-sari-mutiara-sari-mutiara.ac.id-.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Kapten Muslim №79, Helvetia Tengah, Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20124 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8451812 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Sari%20Mutiara&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup66">
                        <div class="content">
                            <span class="close" onclick="closePopup(66)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Sehat Medan </h2>
                                    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/ZHm4fjAnmuC9wINPv5Kt5vWtLtBSYLtxVsapwjSd.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Letda Sujono №20, Bantan Timur, Kec. Medan Tembung, Kota Medan, Sumatera Utara 20223 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7323336 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Sehat%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup67">
                        <div class="content">
                            <span class="close" onclick="closePopup(67)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Siloam Dhirga Surya</h2>
                                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_360,h_240,c_fill,f_auto/v1505698227/hospital_image/Dhirga%20Surya%20Medan.jpg.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Imam Bonjol №6, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20212 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-88881900</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Siloam%20Dhirga%20Surya&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup68">
                        <div class="content">
                            <span class="close" onclick="closePopup(68)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit SMEC Medan</h2>
                                    <img src="https://rsmatasmec.com/files/uploads/seomodel/image/2023/Apr/15/643a506f970e1/dsc06671-min-1-300x200.jpg?token=4c8b3986081bd077a8f78b3889dbcd92" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Iskandar Muda №278, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 0804 122 7788 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20SMEC%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="popup" id="popup69">
                        <div class="content">
                            <span class="close" onclick="closePopup(69)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Sufina Aziz </h2>
                                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjY_Q4tnSxthO-mB2o9o_DDDSAqW3yD4Morn71j_N-qC7budCF0euSNVyMSEce10kHmkd3ZCtwFU6GUC9dAMeVR7Mx1h79LmIwcxtg4a6bh36F2ajm_dEeoPPgG-a_CpZOFgQRTsD-5A9oT1lFJxuu89MT_b4UeyJvCzhtJCI8tmlgigPj4srQwOV7C/w1200-h630-p-k-no-nu/RS%20Sufina%20Aziz%20JAdwal%20Praktik%20Dokter.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Karya Baru №1, Helvetia Timur, Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20124 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8441111</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Sufina%20Azis&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                      {{-- <div class="popup" id="popup70">
                        <div class="content">
                            <span class="close" onclick="closePopup(70)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Sumatera Eye</h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Iskandar Muda №278, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20111 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Sumatera%20Eye&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div> --}}

                      <div class="popup" id="popup71">
                        <div class="content">
                            <span class="close" onclick="closePopup(71)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Sundari Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipO7qTcywSvAN1ykOAbAdoP_sTinQovGKCIDjyD5=w1024-k" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan T.B Simatupang №31, Lalang, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20351 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8452536 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Sundari%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup72">
                        <div class="content">
                            <span class="close" onclick="closePopup(72)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Tere Margareth </h2>
                                    <img src="https://d1yc6vwxvprgjf.cloudfront.net/id/gallery_images/x_medium/1435727470/936458?1435727470" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Ring Road №11, Tanjung Sari, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20131 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8226089</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Tere%20Margareth&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup73">
                        <div class="content">
                            <span class="close" onclick="closePopup(73)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Universitas Sumatera Utara</h2>
                                    <img src="https://konten.usu.ac.id/storage/satker/0/statis/fasilitas/rs_1.webp?w=1920&q=75" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Dr. Mansyur №66, Merdeka, Kec. Medan Baru, Kota Medan, Sumatera Utara 20154 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-8218928 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Universitas%20Sumatera%20Utara&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup74">
                        <div class="content">
                            <span class="close" onclick="closePopup(74)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Vina Estetica</h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOwJKrVb-5kz25jHQ3F_t3rOPLPNKmfPsUTUXHW=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Iskandar Muda №119, Sei Sikambing D, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20111 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4521491  </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Vina%20Estetica&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup75">
                        <div class="content">
                            <span class="close" onclick="closePopup(75)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Wulan Windy </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMgj3VjNJ8Cz8lJ41PYyh6foOAo35BSNM-v7Lso=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Marelan Raya №17, Rengas Pulau, Kec. Medan Marelan, Kota Medan, Sumatera Utara 20255 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 0811-6556-612 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Wulan%20Windy&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup76">
                        <div class="content">
                            <span class="close" onclick="closePopup(76)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Artha Mahinrus </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipMPRb-FDwUDv-AKs_S6U1uYRgm4prK0K6SLS1Vn=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Rakyat №178, Tegal Rejo, Kec. Medan Perjuangan, Kota Medan, Sumatera Utara 20236 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-80088892 <br> 061-80086404 <br> 061-80086111 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Artha%20Mahinrus&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup77">
                        <div class="content">
                            <span class="close" onclick="closePopup(77)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Az-Zakiyah </h2>
                                    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/XnKHTuyuFS6ypPuW6YD4IzZh2Zz8L6JOFIpsNO0O.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Mustafa №4, Glugur Darat I, Kec. Medan Timur, Kota Medan, Sumatera Utara 20238 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-6612508 <br> 0823-7080-0128</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Az-Zakiyah&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      <div class="popup" id="popup78">
                        <div class="content">
                            <span class="close" onclick="closePopup(78)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Badrul Aini</h2>
                                    <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/300124_11-6-2020_15-33-12.jpeg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Syukri №18, Tegal Sari III, Kec. Medan Area, Kota Medan, Sumatera Utara 20216 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7364315 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Badrul%20Aini&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
               </div>

                      {{-- <div class="popup" id="popup79">
                        <div class="content">
                            <span class="close" onclick="closePopup(79)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Bunda Salam Medan </h2>
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Flamboyan №68, Tanjung Selamat, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20135 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 123-45678 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Bunda%20Salam%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                      <div class="popup" id="popup80">
                        <div class="content">
                            <span class="close" onclick="closePopup(80)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Eva Medan</h2>
                                    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/M0Gh3333lkw3zYYoYvVLvYBgvmnHvLLlx4XlLKC0.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Sabarudin №59, Sei Rengas Permata, Kec. Medan Area, Kota Medan, Sumatera Utara 20211 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-7367933</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Eva%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup81">
                        <div class="content">
                            <span class="close" onclick="closePopup(81)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Harapan Ibu Medan</h2>
                                    <img src="https://d1yc6vwxvprgjf.cloudfront.net/id/gallery_images/x_medium/1435191011/778733?1435191011" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Danau Singkarak №13, Sei Agul, Kec. Medan Barat, Kota Medan, Sumatera Utara 20117 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> +62 61 6613378 <br> +62 61 6638140  </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Harapan%20Ibu%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup82">
                        <div class="content">
                            <span class="close" onclick="closePopup(82)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Karya Jaya</h2>
                                    <img src="https://goalkes-images.s3.ap-southeast-1.amazonaws.com/hospitals/UnDf7LFzqmqseZpxrOQ1ww56syEIDfUrA7jp8YjK.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Karya Jaya №182, Gedung Johor, Kec. Medan Johor, Kota Medan, Sumatera Utara 20143 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 081269708010 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Karya%20Jaya&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup83">
                        <div class="content">
                            <span class="close" onclick="closePopup(83)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Rosiva Medan</h2>
                                    <img src="https://static.rsmurniteguh.app/sites/Images/Content/Rosiva.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Bangka №15, Gang Buntu, Kec. Medan Timur, Kota Medan, Sumatera Utara 20212 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4538201 </p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Rosiva%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup84">
                        <div class="content">
                            <span class="close" onclick="closePopup(84)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Sri Ratu </h2>
                                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_360,h_240,c_fill,f_auto/v1557892845/hospital_image/831dbbc387f8_RSIA%20Sri%20Ratu%20-%20depan.jpg.jpg" alt="Rumah Sakit" class="popup-img">
                                    <p class="b"> Alamat </p>
                                    <p> Jalan Nibung Raya №204, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112 </p>
                                    <p class="b"> No. Rumah Sakit </p>
                                    <p> 061-4521074</p>
                                    <p class="b"> Maps </p>
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Sri%20Ratu&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup85">
                        <div class="content">
                            <span class="close" onclick="closePopup(85)">&times;</span>
                            <div class="popup-body">
                                <div class="popup-text">
                                    <h2> Rumah Sakit Ibu dan Anak Stella Maris </h2>
                                    <div class="column-left">
                                        <img src="https://lh3.googleusercontent.com/p/AF1QipPgH7kgWkBW1U-1wk4c6bgXTNZATCKZ_JeXZPfk=s1360-w1360-h1020" alt="Rumah Sakit" class="popup-img">
                                    </div>
                                    <div class="column-right">
                                        <p class="b"> Alamat </p>
                                        <p> Jalan Samanhudi №20, Jati, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20152 </p>
                                        <p class="b"> No. Rumah Sakit </p>
                                        <p> 061-4158383 </p>
                                        <p class="b"> Maps </p>
                                        <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSIA%20Stella%20Maris&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>                                </div>
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
