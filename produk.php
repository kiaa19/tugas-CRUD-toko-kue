<?php
require_once "config/database.php";

$keyword = $_GET['keyword'] ?? '';

if ($keyword != '') {

    $keyword_safe = mysqli_real_escape_string($conn, $keyword);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM produk
         WHERE nama LIKE '%$keyword_safe%'
         ORDER BY id DESC"
    );

} else {

    $query = mysqli_query(
        $conn,
        "SELECT * FROM produk
         ORDER BY id DESC"
    );

}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Produk - Sweet Cake</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>


<!-- =========================
     NAVBAR
========================= -->

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



<!-- =========================
     PRODUK
========================= -->

<section class="products-section">

    <div class="container">


        <!-- JUDUL -->

        <div class="section-heading">

            <span>
                🍰 Sweet Cake
            </span>

            <h1>
                Produk Sweet Cake
            </h1>

            <p>
                Pilihan kue lezat untuk menemani berbagai
                momen spesial.
            </p>

        </div>



        <!-- =========================
             PENCARIAN
        ========================= -->

        <div class="search-box">

            <form action="produk.php"
                  method="GET">

                <input
                    type="text"
                    name="keyword"
                    placeholder="Cari nama produk..."
                    value="<?= htmlspecialchars($keyword); ?>"
                >

                <button type="submit">
                    Cari
                </button>

            </form>

        </div>



        <!-- =========================
             DAFTAR PRODUK
        ========================= -->

        <div class="product-grid">

            <?php if (mysqli_num_rows($query) > 0): ?>

                <?php while ($row = mysqli_fetch_assoc($query)): ?>

                    <div class="product-card">


                        <!-- GAMBAR -->

                        <div class="product-image">

                            <img
                                src="uploads/produk/<?= htmlspecialchars($row['gambar']); ?>"
                                alt="<?= htmlspecialchars($row['nama']); ?>"
                            >

                        </div>


                        <!-- INFORMASI -->

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


                            <!-- HARGA + DETAIL -->

                            <div class="product-bottom">

                                <strong class="product-price">

                                    Rp
                                    <?= number_format(
                                        $row['harga'],
                                        0,
                                        ',',
                                        '.'
                                    ); ?>

                                </strong>


                                <a
                                    href="detail.php?id=<?= $row['id']; ?>"
                                    class="btn-detail"
                                >
                                    Lihat Detail
                                </a>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>


            <?php else: ?>

                <div class="no-product">

                    <h3>
                        Produk tidak ditemukan
                    </h3>

                    <p>
                        Coba cari dengan nama produk yang berbeda.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>



<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

    <div class="container">

        <h3>
            Sweet Cake
        </h3>

        <p>
            Kue lezat untuk setiap momen spesial.
        </p>

        <p class="copyright">

            © <?= date('Y'); ?>
            Sweet Cake.
            All Rights Reserved.

        </p>

    </div>

</footer>


</body>

</html>