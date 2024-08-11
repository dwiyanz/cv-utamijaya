<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DR AKTA PERCETAKAN</title>
    <!-- Tambahkan CSS di sini -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="overlay"></div>
    <div class="popup">
        <p>Anda harus login</p>
        <button onclick="location.href='/login-level'">Login</button>
    </div>

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
                    <a href="{{ route('login-level') }}">Masuk/Daftar</a>
                </div>
            </nav>
        </header>
        <main>
        <h2 class="h2">Produk Kami</h2>
            <section class="products-section">
                <div class="products">
                    <div class="product">
                        <img src="{{ asset('images/kartunama.jpg') }}" alt="Kartu Nama">
                        <h3>Kartu Nama</h3>
                        <p>Harga Rp25.000 /box</p>
                        <p>Bahan: Art paper 260 gsm</p>
                        <p>Ukuran: 9cm x 6cm</p>
                        <button>Pesan</button>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/bukunota.jpg') }}" alt="Buku Nota">
                        <h3>Buku Nota</h3>
                        <p>Harga Rp10.000/buku</p>
                        <p>Bahan: Kertas HVS</p>
                        <p>Ukuran: A4, A5, dan Folio</p>
                        <button>Pesan</button>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/amplop.jpg') }}" alt="Amplop">
                        <h3>Amplop</h3>
                        <p>Harga Rp25.000 /box</p>
                        <p>Bahan: HVS</p>
                        <p>Ukuran: 11cm x 23cm</p>
                        <button>Pesan</button>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/nota.png') }}" alt="Nota">
                        <h3>Nota</h3>
                        <p>Harga Rp25.000 /box</p>
                        <p>Bahan: HVS</p>
                        <p>Ukuran: 11cm x 23cm</p>
                        <button>Pesan</button>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/nota.png') }}" alt="Nota">
                        <h3>Nota</h3>
                        <p>Harga Rp25.000 /box</p>
                        <p>Bahan: HVS</p>
                        <p>Ukuran: 11cm x 23cm</p>
                        <button>Pesan</button>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/nota.png') }}" alt="Nota">
                        <h3>Nota</h3>
                        <p>Harga Rp25.000 /box</p>
                        <p>Bahan: HVS</p>
                        <p>Ukuran: 11cm x 23cm</p>
                        <button>Pesan</button>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 DR AKTA PERCETAKAN. All rights reserved.</p>
        </footer>
    </div>
    <!-- Include external script -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
