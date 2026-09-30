<?php
require_once "config/database.php";

$query = mysqli_query(
    $conn,
    "SELECT * FROM produk ORDER BY id DESC LIMIT 6"
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sweet Cake</title>

    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="navbar-inner">

        <a href="index.php" class="brand">
            Sweet Cake
        </a>

        <div class="nav-links">
            <a href="index.php" class="active">Beranda</a>
            <a href="produk.php">Produk</a>
            <a href="tentang.php">Tentang Kami</a>
        </div>

    </div>
</nav>


<!-- HERO -->
<section class="hero">

    <div class="container hero-content">

        <div class="hero-text">

            <span class="hero-label">
                🍰 Selamat Datang di Sweet Cake
            </span>

            <h1>
                Manisnya Momen,<br>
                Selembut Kue Favoritmu.
            </h1>

            <p>
                Nikmati berbagai pilihan kue lezat yang dibuat
                dengan bahan berkualitas dan penuh cinta.
                Cocok untuk menemani hari-hari spesial maupun
                waktu santai bersama orang tersayang.
            </p>

            <a href="produk.php" class="btn-primary">
                Lihat Produk
            </a>

        </div>


        <!-- FOTO TOKO -->
        <div class="hero-store">

            <img
                src="images/toko-kue.jpg"
                alt="Toko Sweet Cake"
                class="store-photo"
            >

        </div>

    </div>

</section>


<!-- KEUNGGULAN -->
<section class="features">

    <div class="container">

        <div class="section-heading">

            <span>Kenapa Sweet Cake?</span>

            <h2>
                Dibuat untuk Membuat Harimu Lebih Manis
            </h2>

            <p>
                Kami menghadirkan kue dengan rasa yang lezat
                dan kualitas terbaik untuk setiap momen.
            </p>

        </div>


        <div class="feature-grid">

            <div class="feature-card">

                <div class="feature-icon">
                    🍰
                </div>

                <h3>
                    Rasa Lezat
                </h3>

                <p>
                    Kue dibuat dengan rasa yang enak dan
                    cocok untuk berbagai kesempatan.
                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    💕
                </div>

                <h3>
                    Dibuat dengan Cinta
                </h3>

                <p>
                    Setiap kue dibuat dengan perhatian agar
                    menghasilkan rasa dan kualitas terbaik.
                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    🎂
                </div>

                <h3>
                    Cocok untuk Semua Momen
                </h3>

                <p>
                    Bisa dinikmati saat santai, berkumpul,
                    ulang tahun, maupun acara spesial.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- PRODUK TERBARU -->
<section class="products-section">

    <div class="container">

        <div class="section-heading">

            <span>Produk Kami</span>

            <h2>
                Kue Favorit Sweet Cake
            </h2>

            <p>
                Pilihan kue lezat yang bisa kamu nikmati.
            </p>

        </div>


        <div class="product-grid">

            <?php while ($row = mysqli_fetch_assoc($query)) : ?>

                <div class="product-card">

                    <div class="product-image">

                        <img
                            src="uploads/produk/<?= htmlspecialchars($row['gambar']); ?>"
                            alt="<?= htmlspecialchars($row['nama']); ?>"
                        >

                    </div>


                    <div class="product-info">

                        <p class="product-category">
                            <?= htmlspecialchars($row['kategori']); ?>
                        </p>

                        <h3>
                            <?= htmlspecialchars($row['nama']); ?>
                        </h3>

                        <p class="product-description">
                            <?= htmlspecialchars($row['deskripsi']); ?>
                        </p>


                        <div class="product-bottom">

                            <strong class="product-price">
                                Rp <?= number_format($row['harga'], 0, ',', '.'); ?>
                            </strong>

                            <a
                                href="detail.php?id=<?= $row['id']; ?>"
                                class="btn-detail"
                            >
                                Detail
                            </a>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>


        <div class="products-button">

            <a href="produk.php" class="btn-primary">
                Lihat Semua Produk
            </a>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="cta-section">

    <div class="container">

        <div class="cta-box">

            <div>

                <span>
                    💗 Sweet Cake
                </span>

                <h2>
                    Siap Menemani Momen Manismu?
                </h2>

                <p>
                    Yuk lihat pilihan kue kami dan temukan
                    kue favoritmu.
                </p>

            </div>

            <a href="produk.php" class="btn-white">
                Lihat Produk
            </a>

        </div>

    </div>

</section>


<!-- FOOTER -->
<footer class="footer">

    <div class="container">

        <h3>
            Sweet Cake
        </h3>

        <p>
            Kue lezat untuk setiap momen spesial.
        </p>

        <p class="copyright">
            © <?= date('Y'); ?> Sweet Cake. All Rights Reserved.
        </p>

    </div>

</footer>


</body>
</html>