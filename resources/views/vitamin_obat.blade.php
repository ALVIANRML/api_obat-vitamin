<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">;
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/obatdanvitamin.css">
    <title> Vitamin dan Obat • Vitality </title>
</head>
<body>
    <div class="background">
        <nav class="navbar sticky-top bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="http://127.0.0.1:8000/menu">
                <img src="gambar/Logo Navbar.png" alt="Vitality" width="135" height="55">
              </a>
              <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45">
            </nav>

            <p class="text">
                Vitamin dan Obat
            </p>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="button" class="search-button"> Search </button>
            </div>
        </div>

            <p class="text1">
                Daftar <br> Vitamin & Obat
            </p>
            <hr class="fancy">




            <div class="grid-container">
                <div class="card" onclick="openPopup(1)">
                  <p> Vitamin/Obat 1</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 2</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 3</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 4</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 5</p>
                </div>
                <!-- Tambahkan box lainnya di sini -->
              </div>
            <div class="grid-container">
                <div class="card" onclick="openPopup(1)">
                  <p> Vitamin/Obat 1</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 2</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 3</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 4</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 5</p>
                </div>
                <!-- Tambahkan box lainnya di sini -->
              </div>
            <div class="grid-container">
                <div class="card" onclick="openPopup(1)">
                  <p> Vitamin/Obat 1</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 2</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 3</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 4</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 5</p>
                </div>
                <!-- Tambahkan box lainnya di sini -->
              </div>
            <div class="grid-container">
                <div class="card" onclick="openPopup(1)">
                  <p> Vitamin/Obat 1</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 2</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 3</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 4</p>
                </div>
                <div class="card" onclick="openPopup(2)">
                  <p> Vitamin/Obat 5</p>
                </div>
                <!-- Tambahkan box lainnya di sini -->
              </div>


{{-- ini untuk close --}}
              <div class="popup" id="popup1">
                <div class="content">
                  <span class="close" onclick="closePopup(1)">&times;</span>
                  <h2>Konten Pop-Up 1</h2>
                  <p>Informasi lebih lanjut...</p>
                </div>
              </div>

              <div class="popup" id="popup2">
                <div class="content">
                  <span class="close" onclick="closePopup(2)">&times;</span>
                  <h2>Konten Pop-Up 2</h2>
                  <p>Informasi lebih lanjut...</p>
                </div>
              </div>
              <div class="popup" id="popup2">
                <div class="content">
                  <span class="close" onclick="closePopup(2)">&times;</span>
                  <h2>Konten Pop-Up 3</h2>
                  <p>Informasi lebih lanjut...</p>
                </div>
              </div>
              <div class="popup" id="popup2">
                <div class="content">
                  <span class="close" onclick="closePopup(2)">&times;</span>
                  <h2>Konten Pop-Up 4</h2>
                  <p>Informasi lebih lanjut...</p>
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

    <script src="js/vitality.js"></script>
</body>
</html>
