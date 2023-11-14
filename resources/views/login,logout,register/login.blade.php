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
      width: 250px;
    height: 40px;
    background-color:#fff;
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
        @if(session()->has('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
            <div class="gambar mt-40">
                <img src="/gambar/logo pemweb (1).png"widht="120px" height="120px"  alt="logo vitality">
            </div>
            <form action="login" method = "post">
                @csrf

            <div class="kolom mt-50" >
                <input type="email" name="email" class="form-control @error('email')
                is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="kolom mt-40" >
                <input type="password" name="password"
                 class="form-control
                @error('password')
                is-invalid"
                @enderror
                id="password"
                 placeholder="Kata Sandi" required>
                    @error('password')
                    <div class="invalid=feedback">
                        {{ $message }}
                    </div>
                    @enderror
            </div>

            <div class="tombol mt-50">
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="center-button">
            <p>belum punya akun?<br><a href="register">silahkan registrasi</p>
        </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
