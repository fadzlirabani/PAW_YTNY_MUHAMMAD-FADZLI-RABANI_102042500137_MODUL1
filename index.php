<?php
$daftar_produk = [
    [
        "nama" => "Kaos Polos Premium",
        "kategori" => "Pakaian",
        "harga" => 75000,
        "stok" => 10
    ],
    [
        "nama" => "Jaket Hoodie Unisex",
        "kategori" => "Pakaian",
        "harga" => 150000,
        "stok" => 0
    ],
    [
        "nama" => "Topi Snapback",
        "kategori" => "Aksesori",
        "harga" => 45000,
        "stok" => 5
    ],
    [
        "nama" => "Mouse Gaming Wireless",
        "kategori" => "Teknologi",
        "harga" => 250000,
        "stok" => 8
    ],
    [
        "nama" => "Keyboard Mekanikal RGB",
        "kategori" => "Teknologi",
        "harga" => 450000,
        "stok" => 0
    ],
    [
        "nama" => "Earphone Bluetooth",
        "kategori" => "Teknologi",
        "harga" => 180000,
        "stok" => 15
    ]
];

$jumlah_produk = count($daftar_produk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Simple Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Georgia, serif;
            background: #f4efe6;
            color: #333;
        }

        header {
            background: #4b3832;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            color: #fff;
            font-size: 25px;
        }

        nav a {
            color: #f7eee3;
            text-decoration: none;
            margin-left: 20px;
            font-size: 15px;
        }

        nav a:hover {
            color: #e7b66b;
        }

        .hero {
            text-align: center;
            padding: 55px 20px;
            background: #d9b99b;
        }

        .hero h2 {
            margin: 0 0 10px;
            font-size: 32px;
            color: #3d2b25;
        }

        .hero p {
            margin: 0;
            color: #5c463c;
        }

        main {
            width: 85%;
            max-width: 1000px;
            margin: 30px auto;
        }

        .info {
            background: #fff;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .info strong {
            color: #4b3832;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .card:hover {
            transform: scale(1.02);
            transition: 0.2s;
        }

        .kategori {
            display: inline-block;
            background: #ead7c3;
            color: #67483b;
            padding: 5px 9px;
            border-radius: 5px;
            font-size: 12px;
        }

        .card h3 {
            margin: 15px 0 10px;
            color: #3d2b25;
        }

        .harga {
            color: #a45d32;
            font-size: 20px;
            font-weight: bold;
        }

        .stok {
            margin: 10px 0;
            font-size: 14px;
            color: #666;
        }

        .tersedia {
            color: #37805b;
            font-weight: bold;
        }

        .habis {
            color: #b34d4d;
            font-weight: bold;
        }

        button {
            width: 100%;
            border: none;
            padding: 11px;
            border-radius: 7px;
            background: #4b3832;
            color: white;
            cursor: pointer;
            font-family: Georgia, serif;
        }

        button:hover {
            background: #6b5046;
        }

        button:disabled {
            background: #aaa;
            cursor: not-allowed;
        }

        footer {
            margin-top: 50px;
            background: #4b3832;
            color: white;
            text-align: center;
            padding: 18px;
        }

        @media (max-width: 800px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            header {
                flex-direction: column;
                gap: 15px;
            }
        }

        @media (max-width: 500px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            nav a {
                margin: 0 5px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>Simple Store</h1>

    <nav>
        <a href="#">Home</a>
        <a href="#">Produk</a>
        <a href="#">Kontak</a>
    </nav>
</header>

<section class="hero">
    <h2>Selamat Datang 👋</h2>
    <p>Temukan berbagai produk pilihan dengan harga terjangkau.</p>
</section>

<main>

    <div class="info">
        <strong>Jumlah Produk:</strong>
        <?= $jumlah_produk; ?> produk tersedia di katalog
    </div>

    <h2>Produk Terbaru</h2>

    <div class="product-grid">

        <?php foreach ($daftar_produk as $produk): ?>

            <div class="card">

                <span class="kategori">
                    <?= $produk['kategori']; ?>
                </span>

                <h3>
                    <?= $produk['nama']; ?>
                </h3>

                <div class="harga">
                    Rp <?= number_format($produk['harga'], 0, ',', '.'); ?>
                </div>

                <div class="stok">
                    Stok: <?= $produk['stok']; ?>
                </div>

                <?php if ($produk['stok'] > 0): ?>

                    <p class="tersedia">
                        ✓ Produk tersedia
                    </p>

                    <button>
                        Beli Produk
                    </button>

                <?php else: ?>

                    <p class="habis">
                        ✕ Stok habis
                    </p>

                    <button disabled>
                        Tidak Tersedia
                    </button>

                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    </div>

</main>

<footer>
    &copy; 2026 Simple Store
</footer>

</body>
</html>