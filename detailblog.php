<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

$kategori = [
  "Sejarah" => "assets/images/icon/sejarah.png",
  "Alam" => "assets/images/icon/alam.png",
  "Belanja" => "assets/images/icon/belanja.png",
  "Budaya" => "assets/images/icon/budaya.png",
  "Hiburan" => "assets/images/icon/hiburan.png",
  "Kuliner" => "assets/images/icon/kuliner.png",
  "Pantai" => "assets/images/icon/pantai.png",
  "Religi" => "assets/images/icon/religi.png"
];

$blog = [ 
  [
  "id" => 0,
  "judul" => "SNL Food Batam Tawarkan Promo Menarik Menyambut Idul Fitri 1445 H",
  "tanggal" => "Rabu, 27 Maret 2024",
  "deskripsi" => " Menjelang perayaan Idul Fitri 1445 H, SNL Food, pusat perbelanjaan terkemuka di Kota Batam, menghadirkan rangkaian promo spesial yang dirancang khusus untuk memanjakan para pelanggan setianya. 
  Sebagai destinasi belanja yang dikenal dengan keberagaman dan kualitas produknya, SNL Food menawarkan berbagai penawaran menarik, terutama untuk daging segar dan parcel Lebaran. <br>  <br>
  
  Salah satu promo unggulan yang ditawarkan oleh SNL Food adalah diskon spesial untuk daging segar pilihan. Daging-daging tersebut dipilih dari sapi berkualitas premium dan dijamin kesegarannya, sehingga pelanggan dapat menikmati hidangan Lebaran yang lezat dengan harga yang terjangkau.  <br>  <br>
  
  Promo ini menjadi kesempatan emas bagi para pelanggan untuk mendapatkan bahan-bahan berkualitas tinggi untuk persiapan hidangan Lebaran mereka.
  Tidak hanya itu, SNL Food juga menawarkan berbagai pilihan parcel Lebaran yang tersedia dalam berbagai ukuran dan harga. Parcel-parcel ini dirancang untuk memenuhi kebutuhan dan anggaran pelanggan, dengan kombinasi produk yang beragam, mulai dari bahan pokok hingga produk berkualitas lainnya. 
  Parcel Lebaran dari SNL Food menjadi pilihan yang sempurna untuk memeriahkan momen Lebaran bersama keluarga dan kerabat.  <br>
  
  Selain daging segar dan parcel, SNL Food juga menaruh perhatian pada kue-kue Lebaran. Dengan berkolaborasi dengan produk-produk UMKM lokal, SNL Food menyediakan kue-kue Lebaran dengan kualitas dan rasa premium.   <br>  <br>
  
  Berbagai varian kue yang lezat tersedia untuk memenuhi selera pelanggan, sehingga membuat perayaan Lebaran mereka semakin istimewa.
  Dengan promo-promo menarik dan kualitas produk yang terjamin, SNL Food menjadi pilihan utama bagi masyarakat Kota Batam untuk berbelanja kebutuhan Lebaran.
  
  Pelanggan diundang untuk segera mengunjungi SNL Food dan memanfaatkan promo-promo eksklusif yang ditawarkan sebelum kehabisan. Jangan lewatkan kesempatan untuk membuat momen Idul Fitri Anda lebih berkesan dengan berbelanja di SNL Food.
  ",
  "gambar" => "assets/images/blog/photo1.png",
  "artikel" => "Batam, Batamnews",
  "penulis" => "Ray",
  "editor" => "Rhuuzi Wiranata",
  "tagline" => ["Religi"],
  "url" => "detailblog.php?id=0",
],
[
  "id" => 1,
  "judul" => "Kawasan Sekupang Naik Kelas? Bocoran Proyek Baru!",
  "tanggal" => "Rabu, 27 Maret 2024",
  "deskripsi" => "Kabar gembira datang untuk warga Batam, khususnya di kawasan Sekupang! Bocoran proyek baru yang beredar menjanjikan peningkatan kelas bagi kawasan ini. ",
  "gambar" => "assets/images/blog/photo2.png",
  "artikel" => "Batam, Batamnews",
  "penulis" => "Ray",
  "editor" => "Rhuuzi Wiranata",
  "tagline" => ["Hiburan"],
  "url" => "detailblog.php?id=1",
],
[
  "id" => 2,
  "judul" => "Bazar Makanan di Cipta Puri Tiban, Surga Kuliner untuk Berbuka Puasa di Batam",
  "tanggal" => "Rabu, 27 Maret 2024",
  "deskripsi" => "Bagi Anda yang sedang mencari tempat untuk membeli makanan berbuka puasa di Kota Batam, Bazar Makanan di Cipta Puri Tiban bisa menjadi pilihan yang tepat. ",
  "gambar" => "assets/images/blog/photo3.png",
  "artikel" => "Batam, Batamnews",
  "penulis" => "Ray",
  "editor" => "Rhuuzi Wiranata",
  "tagline" => ["Kuliner"],
  "url" => "detailblog.php?id=2",
],
[
  "id" => 3,
  "judul" => "2 Masjid Megah di Batam, Destinasi Wisata Religi Sekaligus Bisa untuk Melihat Singapura",
  "tanggal" => "Sabtu, 16 Maret 2024",
  "deskripsi" => "Kota Batam memiliki sejumlah masjid dengan bangunan megah serta unik. Karena kemegahan dan keunikannya, banyak wisatawan yang datang ke Batam tidak sekedar ibadah melainkan juga menjadikan masjid sebagai tempat wisata religi.",
  "gambar" => "assets/images/blog/photo4.png",
  "artikel" => "Batam, Batamnews",
  "penulis" => "Ray",
  "editor" => "Rhuuzi Wiranata",
  "tagline" => ["Religi"],
  "url" => "detailblog.php?id=3",
],
[
  "id" => 4,
  "judul" => "Terbesar se-Asia Tenggara, Maha Vihara Duta Maitreya Batam Lokasi Favorit Wisatawan",
  "tanggal" => "Sabtu, 16 Maret 2024",
  "deskripsi" => "
  Selain terkenal sebagai surganya berbelanja, Batam juga memiliki destinasi wisata religi yang tersebar dibeberapa Kecamatan di Batam. Salah satunya adalah vihara terbesar se-Asia Tenggara. Vihara Buddha yang dikenal sebagai....",
  "gambar" => "assets/images/blog/photo5.png",
  "artikel" => "Batam, Batamnews",
  "penulis" => "Ray",
  "editor" => "Rhuuzi Wiranata",
  "tagline" => ["Hiburan"],
  "url" => "detailblog.php?id=4",
],
[
  "id" => 5,
  "judul" => "Semua Ada di Kota Batam, Destinasi Wisata Berskala Internasional",
  "tanggal" => "Rabu, 13 Maret 2024",
  "deskripsi" => "Sebagai salah satu kota tujuan wisata di Indonesia, Batam memiliki keindahan kota yang cukup lengkap. Mulai dari destinasi wisata belanja, alam dengan pantai dan resort mewah.",
  "gambar" => "assets/images/blog/photo6.png",
  "artikel" => "Batam, Batamnews",
  "penulis" => "Ray",
  "editor" => "Rhuuzi Wiranata",
  "tagline" => ["Hiburan"],
  "url" => "detailblog.php?id=5",
],
];

// Ambil ID dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Cari data blog berdasarkan ID
    foreach ($blog as $data) {
        if ($data['id'] == $id) {
            break;
        }
    }
}

?>

<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <div class="container1">
            <div class="text-overlayBlog">
                <h1>Detail Blog</h1>
            </div>
            <img src="assets/images/wisata/Mask.png" class="logo-image" style="height: auto; width:100%;">
            <br>
        </div>

        <div class="containerblog">
            <div class="blog-left">
              <div class="container1">
                <div class="namaBlog">
                  <h1><?= htmlspecialchars($data['judul']) ?></h1>
                  <p><?= $data['tanggal'] ?></p>
                </div>
                <div class="pic-wisata">
                  <img src="<?= $data['gambar'] ?>" alt="Gambar Blog">
                </div>
              </div>
              <div class="content-detailblog">
              <p><strong><?= $data['artikel'] ?></strong> - <?= $data['deskripsi'] ?></p>
              </div>
              <div class="content-author">
              <p><strong><?= $data['penulis'] ?></strong></p>
              <p>Editor: <strong><?= $data['editor'] ?></strong></p>

              <?php if (is_array($data['tagline'])): // Check if 'tagline' is an array ?>
                    <?php foreach ($data['tagline'] as $tagline): ?>
                        <?php if (isset($kategori[$tagline])): ?>
                            <div class="tag">
                                <img src="<?= htmlspecialchars($kategori[$tagline]) ?>" class="logo-image" style="height: auto; width:13%;">
                                <p><?= htmlspecialchars($tagline) ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="blog-right">
              <h3>Blog terkait</h3>
                <div class="card-berita-container">
                    <?php foreach ($blog as $data): ?>
                        <a href="<?= htmlspecialchars($data['url']) ?>" class="card-berita">
                            <img src="<?= htmlspecialchars($data['gambar']) ?>" alt="Gambar Blog">
                            <h2><?= htmlspecialchars($data['judul']) ?></h2>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
    </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
