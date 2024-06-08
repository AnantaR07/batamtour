<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>batamtour</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

$blog = [ 
    [
        "id" => 0,
        "judul" => "SNL Food Batam Tawarkan Promo Menarik Menyambut Idul Fitri 1445 H",
        "tanggal" => "Rabu, 27 Maret 2024",
        "deskripsi" => "Menjelang perayaan Idul Fitri 1445 H, SNL Food, pusat perbelanjaan terkemuka di Kota Batam, menghadirkan rangkaian promo spesial yang dirancang khusus untuk memanjakan para pelanggan setianya.",
        "gambar" => "assets/images/blog/photo1.png",
        "url" => "detailblog.php?id=0", // URL dengan parameter ID
    ],
    [
      "id" => 1,
      "judul" => "Kawasan Sekupang Naik Kelas? Bocoran Proyek Baru!",
      "tanggal" => "Rabu, 27 Maret 2024",
      "deskripsi" => "Kabar gembira datang untuk warga Batam, khususnya di kawasan Sekupang! Bocoran proyek baru yang beredar menjanjikan peningkatan kelas bagi kawasan ini. ",
      "gambar" => "assets/images/blog/photo2.png",
      "url" => "detailblog.php?id=1", 
    ],
    [
      "id" => 2,
      "judul" => "Bazar Makanan di Cipta Puri Tiban, Surga Kuliner untuk Berbuka Puasa di Batam",
      "tanggal" => "Rabu, 27 Maret 2024",
      "deskripsi" => "Bagi Anda yang sedang mencari tempat untuk membeli makanan berbuka puasa di Kota Batam, Bazar Makanan di Cipta Puri Tiban bisa menjadi pilihan yang tepat. ",
      "gambar" => "assets/images/blog/photo3.png",
      "url" => "detailblog.php?id=2", 
    ],
    [
      "id" => 3,
      "judul" => "2 Masjid Megah di Batam, Destinasi Wisata Religi Sekaligus Bisa untuk Melihat Singapura",
      "tanggal" => "Sabtu, 16 Maret 2024",
      "deskripsi" => "Kota Batam memiliki sejumlah masjid dengan bangunan megah serta unik. Karena kemegahan dan keunikannya, banyak wisatawan yang datang ke Batam tidak sekedar ibadah melainkan juga menjadikan masjid sebagai tempat wisata religi.",
      "gambar" => "assets/images/blog/photo4.png",
      "url" => "detailblog.php?id=3", 
    ],
    [
      "id" => 4,
      "judul" => "Terbesar se-Asia Tenggara, Maha Vihara Duta Maitreya Batam Lokasi Favorit Wisatawan",
      "tanggal" => "Sabtu, 16 Maret 2024",
      "deskripsi" => "
      Selain terkenal sebagai surganya berbelanja, Batam juga memiliki destinasi wisata religi yang tersebar dibeberapa Kecamatan di Batam. Salah satunya adalah vihara terbesar se-Asia Tenggara. Vihara Buddha yang dikenal sebagai....",
      "gambar" => "assets/images/blog/photo5.png",
      "url" => "detailblog.php?id=4", 
    ],
    [
      "id" => 5,
      "judul" => "Semua Ada di Kota Batam, Destinasi Wisata Berskala Internasional",
      "tanggal" => "Rabu, 13 Maret 2024",
      "deskripsi" => "Sebagai salah satu kota tujuan wisata di Indonesia, Batam memiliki keindahan kota yang cukup lengkap. Mulai dari destinasi wisata belanja, alam dengan pantai dan resort mewah.",
      "gambar" => "assets/images/blog/photo6.png",
      "url" => "detailblog.php?id=5", 
    ],
];

?>

<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <div class="container1">
            <div class="text-overlayWisata">
                <h1>Blog</h1>
            </div>
            <img src="assets/images/wisata/Mask.png" class="logo-image" style="height: auto; width:100%;">
            <br>
        </div>
        <div class="container1">
            <div class="blog">
                <h2>Apa yang terbaru hari ini?</h2>
            </div>
            <?php foreach ($blog as $data): ?>
                <div class="blog-card">
                    <div class="img-blog">
                        <img src="<?= $data['gambar'] ?>" alt="Gambar Blog">
                    </div>
                    <div class="content-blog">
                        <h2><?= $data['judul'] ?></h2>
                        <p><?= $data['tanggal'] ?></p>
                        <p><?= $data['deskripsi'] ?></p>
                        <a href="<?= $data['url'] ?>" class="read-more">Selengkapnya</a> <!-- Pastikan tag <a> ditutup dengan baik -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
