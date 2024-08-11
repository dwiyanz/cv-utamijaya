<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Level - DR AKTA PERCETAKAN</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
    <h1 class="h1">DR AKTA PERCETAKAN</h1>
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Cek Pesanan</a></li>
                    <li><a href="#">Profil Perusahaan</a></li>
                </ul>
                <div class="auth-buttons">
                    <a href="/loginlevel">Masuk/Daftar</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="login-level-container">
                <div class="login-form">
                    <h2>Masukkan username dan kata sandi</h2>
                    <form action="/login" method="POST">
                        @csrf
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan username anda">
                        <label for="password">Kata sandi</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi anda">
                        <div class="checkbox-container">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Biarkan saya tetap masuk</label>
                        </div>
                        <button type="submit">Masuk</button>
                        <p><a href="#">Lupa kata sandi anda?</a></p>
                    </form>
                </div>
                <div class="login-image">
                    <img src="{{ asset('images/cover perusahaan.jpg') }}" alt="Login Image">
                    <div class="login-level">
                        <h2>Pilih login level anda</h2>
                        <button onclick="location.href='/login/pelanggan'">Pelanggan</button>
                        <button onclick="location.href='/login/admin'">Admin</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
