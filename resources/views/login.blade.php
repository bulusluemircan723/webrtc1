<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidConnect - Giriş Yap</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div class="wrapper">
        <div class="title">GİRİŞ YAP</div>

        <div class="form">
            <div class="input_field">
                <input type="text" placeholder="Ad" class="input">
                <i class="fas fa-user"></i>
            </div>
            <div class="input_field">
                <input type="email" placeholder="Email" class="input">
                <i class="far fa-envelope"></i>
            </div>
            <div class="input_field">
                <input type="password" placeholder="Şifre" class="input">
                <i class="fas fa-lock"></i>
            </div>
            <div class="btn">
                <button onclick="window.location.href='/home'">Giriş Yap</button>
            </div>
        </div>
    </div>

</body>
</html>
