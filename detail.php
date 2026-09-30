<?php
require_once "config/database.php";

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$query = mysqli_query(
    $conn,
    "SELECT * FROM produk WHERE id = $id"
);

$product = mysqli_fetch_assoc($query);

if (!$product) {
    echo "Produk tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?= htmlspecialchars($product['nama']); ?> - Sweet Cake
    </title>

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

            <a href="index.php">
                Beranda
            </a>

            <a href="produk.php" class="active">
                Produk
            </a>

            <a href="tentang.php">
                Tentang Kami
            </a>

        </div>

    </div>

</nav>



<!-- DETAIL PRODUK -->

<section class="detail-section">

    <div class="container">

        <div class="detail-card">


            <!-- GAMBAR PRODUK -->

            <div class="detail-image">

                <img
                    src="uploads/produk/<?= htmlspecialchars($product['gambar']); ?>"
                    alt="<?= htmlspecialchars($product['nama']); ?>"
                >

            </div>



            <!-- INFORMASI PRODUK -->

            <div class="detail-info">

                <p class="detail-category">
                    <?= htmlspecialchars($product['kategori']); ?>
                </p>

                <h1>
                    <?= htmlspecialchars($product['nama']); ?>
                </h1>

                <p class="detail-description">
                    <?= htmlspecialchars($product['deskripsi']); ?>
                </p>

                <div class="detail-price">
                    Rp <?= number_format(
                        $product['harga'],
                        0,
                        ',',
                        '.'
                    ); ?>
                </div>

                <p class="detail-stock">
                    Stok tersedia:
                    <strong>
                        <?= htmlspecialchars($product['stok']); ?>
                    </strong>
                </p>


                <div class="detail-buttons">

                    <a
                        href="produk.php"
                        class="btn-primary"
                    >
                        ← Kembali ke Produk
                    </a>

                </div>

            </div>

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
            © <?= date('Y'); ?> Sweet Cake.
            All Rights Reserved.
        </p>

    </div>

</footer>


</body>
</html>