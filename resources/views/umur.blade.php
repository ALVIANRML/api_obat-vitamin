<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" href="/css/umur.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap" rel="stylesheet">
    <title> Vitality </title>
</head>
<body>
    <nav class="navbar sticky-top bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://127.0.0.1:8000/menu">
            <img class="logo" src="gambar/Logo Navbar.png" alt="Vitality" width="135" height="55">
        </a>
        <img class="menu" src="gambar/Log-in.png" alt="Log-in" width="45" height="45">
        </div>
        </nav>

    <section id="umur">
        <div class="background" style="background-image: url('gambar/home.jpg');">
            <div class="box">
                <img className="logo" alt="logo pemweb" src="gambar/logo pemweb (1).png" height= "200px" width= "200px";/>


                <form onsubmit="return validateForm()">
                    <div id="age-input">
                        <input type="radio" name="age" id="anak" value="anak">
                        <label for="anak">Anak (6-12 tahun)</label>

                        <input type="radio" name="age" id="dewasa" value="dewasa">
                        <label for="dewasa">Dewasa (12 tahun ke atas)</label>
                    </div>

                    <p class="teks3"> Masukkan umur Anda </p>
                  <div id="error-message"></div>
                  <a id="submit-btn" href="http://127.0.0.1:8000/menu" onclick="return validateForm()"> SUBMIT </a>
                </form>
  </div>

  </div>
  <script>
    function validateForm() {
      var age = document.querySelector('input[name="age"]:checked');
      var errorMessage = document.getElementById('error-message');

      if (!age) {
        errorMessage.textContent = "Silakan pilih kategori umur (Dewasa/Anak) terlebih dahulu!";
        return false;
      }

      return true;

    }
  </script>
            <!-- <center>
                <div class="box">
                    <img className="logo" alt="logo pemweb" src="gambar/logo pemweb (1).png" height= "150px" width= "150px";/>
                    <hr>
                    <p class="teks3">
                        Masukkan umur Anda
                    </p>
                    <button type="button" class="pilih2"> Anak (6-12 tahun) </button><br>
                    <button type="button" class="pilih3"> Dewasa (12 tahun ke atas) </button><br>
                    <a class="clickbtn" href="http://127.0.0.1:8000/menu">
                        <button type="button" class="pilih4"> SUBMIT </button>
                    </a>
                </div>
            </div>
        </center>
    </section> -->

        </div>
</body>
</html>
