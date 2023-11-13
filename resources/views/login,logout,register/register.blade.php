<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitality</title>
    <link rel="stylesheet" type="text/css" href="/css/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
input[type="text"],
input[type="password"],
input[type="email"]
 {
      border-radius: 5px;
      width: 250px; /* Atur lebar kotak */
    height: 40px; /* Atur tinggi kotak */
    background-color:#fff; /* Warna latar belakang */
    border-radius: 10px;}

input[type="submit"]
{
    background-color: #C82840;
    color: white;
    align-items: center;
    width: 150px;
    height: 50px;
    border-radius: 20px;
}

    </style>
</head>
<body>

    <div class="container">
        <div class="kotak">
            <div class="gambar mt-40">
                <img src="/gambar/logo pemweb (1).png"widht="120px" height="120px"  alt="logo vitality">
            </div>
            <form action="register" method = "post">
                @csrf
            <div class="kolom mt-40" >
                <input type="text" name="name" placeholder="Nama">
                @error('name')
        <div class="error-message">{{ $message }}</div>
    @enderror
            </div>
            <div class="kolom mt-20" >
                <input type="email" name="email" placeholder="Email">
                @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
            </div>
            <div class="kolom mt-20" >
                <input type="password" name="password" placeholder="Kata Sandi">
            </div>

            <div class="tombol mt-50">
                <input type="submit" value="Submit">
            </div>
        </form>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
