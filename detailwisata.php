<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>batamtour</title>
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

$wisata = [
  [
    "id" => 0,
    "nama" => "MASJID SULTAN MAHMUD RIAYAT SYAH",
    "gambar" => "assets/images/wisata/Photo5.png",
    "deskripsi" => "Pantai Nongsa merupakan pantai pasir putih yang indah, terletak di sebelah utara Pulau Batam.",
    "lokasi" => "Jl. Tj. Uncang, Tj. Uncang, Kec. Batu Aji, Kota Batam, Kepulauan Riau, Indonesia",
    "gambarLokasi" => "assets/images/detailwisata/photo1.jpeg",
    "kecamatan" => "Batu Aji",
    "tagline" => ["Religi", "Sejarah"],
    "informasi" => [
        "Kota Batam punya wisata religi cantik bernama Masjid Sultan Mahmud Riayat Syah. Masjid ini menjadi ikon baru Kota Batam. Saat ini Pemerintah Kota Batam sedang memfokuskan pembangunan pada sektor pariwisata. Dengan itu Pemerintah Kota Batam mulai membangun berbagai destinasi wisata untuk menarik wisatawan mancanegara, salah satunya wisata religi.Masjid Sultan Mahmud Riayat Syah menjadi ikon baru Kota Batam. Masjid yang terletak di Kecamatan Batu Aji ini merupakan masjid terbesar di Sumatra.",
        "- Wisatawan dapat mempelajari sejarah masjid maupun mengenai islam secara langsung disana.",
        "- Bagi anda yang memiliki minat pada arsitektur tempat ini cocok sekali karena arsitektur disana sangatlah menarik untuk dipelajari sebab masjid ini merupakan masjid terbesar di Sumatra."
    ],
    "waktu" => "04:30-21:00 WIB",
    "harga" => 0,
    "galeri" => ["assets/images/detailwisata/MasjidSultan/photo1.jpeg","assets/images/detailwisata/MasjidSultan/photo2.png","assets/images/detailwisata/MasjidSultan/photo3.png",],
    "lokasiwisata" => "https://maps.app.goo.gl/KRdXsBkSvLZKMuUR7"
  ],
  [
    "id" => 1,
    "nama" => "Pantai Nongsa",
    "gambar" => "assets/images/wisata/Photo1.png",
    "deskripsi" => "Pantai Nongsa merupakan pantai pasir putih yang indah, terletak di sebelah utara Pulau Batam",
    "lokasi" => "Sambau, Kecamatan Nongsa, Kota Batam, Kepulauan Riau 29465",
    "gambarLokasi" => "assets/images/detailwisata/photo2.jpg",
    "kecamatan" => "Nongsa",
    "tagline" => ["Alam", "Pantai"],
    "informasi" => [
      "Keindahan Pantai Nongsa menjadi salah satu pemikat kunjungan wisatawan nusantara maupun manvanegara, khususnya dari Singapura dan Malaysia. Pantai Nongsa merupakan pantai pasir putih yang indah, terletak di sebelah utara Pulau Batam. Dari pantai ini kitab isa melihat Singapura dari kejauhan. Kali ini, Wonderful Images mengajak untuk melihat keindahannya dari Nongsa Point Marina Resort.",
      "Nongsa Point Marina Resort merupakan salah satu resort di Batam terletak di Jl. Hang Lekiu, Sambau, Kecamatan Nongsa, Kota Batam, Kepulauan Riau. Nongsa Point Marina & Resort didesain dengan sentuhan Mediterania dan dibangun di sekitar teluk alami di Nongsa di Pulau Batam. Panorama resort ini menghadap dermaga di mana kapal-kapal yacht diparkirkan. Lanskap hotel ini bisa dinikmati dari balkon villa yang cantik."
    ],
    "waktu" => "00: 00-23:59 WIB",
    "harga" => 10000,
    "galeri" => ["assets/images/detailwisata/PantaiNongsa/photo1.jpg","assets/images/detailwisata/PantaiNongsa/photo2.jpg"],
    "lokasiwisata" => "https://maps.app.goo.gl/fuZYhpAgVkXJjzRWA"
  ],
  [
    "id" => 2,
    "nama" => "Mega Wisata Ocarina",
    "gambar" => "assets/images/wisata/Photo2.png",
    "deskripsi" => "Mega Wisata Ocarina Batam adalah theme park dan tujuan wisata favorit di Batam. Taman ini dibangun di lahan seluas 40 hektar pada 2008.",
    "lokasi" => "Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444",
    "gambarLokasi" => "assets/images/detailwisata/photo3.jpg",
    "kecamatan" => "Bengkong",
    "tagline" => ["Hiburan", "Pantai"],
    "informasi" => [
      "Mega Wisata Ocarina Batam adalah theme park dan tujuan wisata favorit di Batam. Taman ini dibangun di lahan seluas 40 hektar pada 2008. Setelah pengunjung memasukin gerbang, mereka akan disambut dengan patung shio seperti kelinci, kerbau, naga, tikus, harimau, kambing, ular, monyet, kuda dan ayam."
    ],
    "waktu" => "08:00-22:00 WIB",
    "harga" => 10000,
    "galeri" => ["assets/images/detailwisata/MegaWisata/photo1.jpg","assets/images/detailwisata/MegaWisata/photo2.jpg","assets/images/detailwisata/MegaWisata/photo3.jpg"],
    "lokasiwisata" => "https://maps.app.goo.gl/2MZjdzLW3MaDCxGcA"
  ],
  [
    "id" => 3,
    "nama" => "Vihara Samudra",
    "gambar" => "assets/images/wisata/Photo3.png",
    "deskripsi" => "Loremipsumahbcdhs asbdcdjhanb dmbcj sjb adbjksxnkjdcbjk gsdcbajk ajgdxbjs csjdcg ajdg.",
    "lokasi" => "Jalan Gajah Mada, Patam Lestari, Sekupang, Patam Lestari, Batam, Kota Batam, Kepulauan Riau 29426",
    "gambarLokasi" => "assets/images/detailwisata/photo4.jpg",
    "kecamatan" => "Sekupang",
    "tagline" => ["Religi", "Sejarah"],
    "informasi" => [
      "Vihara samudra dharma berada di daerah Tiban mentarau, Tiban, berdiri diatas area seluas 2,1 hektar. Vihara ini berada di lokasi yang dipercaya memiliki view yang bagus untuk berdoa atau bersembahyang. berdiri diatas perbukitan yang didepannya berhadapan langsung dengan muara (air).",
      "Seiring dengan berjalannya waktu, keberadaan vihara jadi lebih dibutuhkan bagi umat vihara yang bernaung dibawah Yayasan samudra dharma mentarau jadi tujuan destinasi wisata di sektor pariwisata."
    ],
    "waktu" => "-",
    "harga" => 0,
    "galeri" => ["assets/images/detailwisata/ViharaSamudra/photo1.jpg","assets/images/detailwisata/ViharaSamudra/photo2.jpg"],
    "lokasiwisata" => "https://maps.app.goo.gl/krWx7ExWAcz6oF8o8"
  ],
  [
    "id" => 4,
    "nama" => "Batam Adventure Park",
    "gambar" => "assets/images/wisata/Photo4.png",
    "deskripsi" => "Loremipsumahbcdhs asbdcdjhanb dmbcj sjb adbjksxnkjdcbjk gsdcbajk ajgdxbjs csjdcg ajdg.",
    "lokasi" => "Jl. Sudirman, Taman Baloi, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29432",
    "gambarLokasi" => "assets/images/detailwisata/photo5.jpg",
    "kecamatan" => "Batam Kota",
    "tagline" => ["Hiburan"],
    "informasi" => [
      "Batam Adventure Park menyediakan ATV yang cocok untuk berbagai tingkat keahlian, memastikan pengalaman yang aman dan menyenangkan bagi semua pengendara. Kru kami yang berpengetahuan luas akan tersedia untuk memandu peserta dan memastikan keselamatan mereka selama perjalanan.",
      "Armada ATV kami ditenagai oleh mesin 10 tenaga kuda yang kuat, dirancang untuk memberikan sensasi yang memacu adrenalin. Mesin bertenaga ini memastikan bahwa pengendara dapat menikmati pengalaman yang dinamis dan menggembirakan saat mereka menavigasi melalui jalur hutan kami. Kami memfasilitasi petualangan solo, tamasya kelompok, atau acara khusus, memastikan kepuasan maksimal."
    ],
    "waktu" => "09:00-17:30 WIB",
    "harga" => 250000,
    "galeri" => ["assets/images/detailwisata/BatamAdventure/photo1.jpg","assets/images/detailwisata/BatamAdventure/photo2.jpg"],
    "lokasiwisata" => "https://maps.app.goo.gl/tsq44QP7dkvJ5Ah58"
  ]
];

$id = isset($_GET['id']) ? $_GET['id'] : null;

// Cari data wisata berdasarkan ID
$data = null;
foreach ($wisata as $item) {
    if ($item['id'] == $id) {
        $data = $item;
        break;
    }
}

// Jika data tidak ditemukan, tampilkan pesan kesalahan atau alihkan pengguna
if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <div class="container1">
            <div class="text-overlayWisata">
                <h1>Wisata</h1>
            </div>
            <img src="assets/images/wisata/Mask.png" class="logo-image" style="height: auto; width:100%;">
            <br>
        </div>
        <div class="container1">
            <div class="namawisata">
                <h1><?= htmlspecialchars($data['nama']) ?></h1>
            </div>
        </div>
        <div class="pic-wisata">
          <img src="<?= htmlspecialchars($data['gambarLokasi']) ?>">
        </div>
        <div class="lokasi">
            <img src="assets/images/icon/Location.png" alt="Icon Lokasi">
            <p>Lokasi: <?= htmlspecialchars($data['lokasi']) ?></p>
            <div class="btn-lokasiWisata">
            <button class="detail" onclick="window.location.href = '<?= htmlspecialchars($data['lokasiwisata']) ?>';">Perlihatkan di Peta</button>
            </div>
        </div>
        <div class="detail-wisata">
            <p>Kecamatan:</p>
            <div class="tag">
                <p><?= htmlspecialchars($data['kecamatan']) ?></p>
            </div>
            <p>Kategori:</p>
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

          <div class="container1">
            <div class="informasiwisata">
              <h2>Informasi Wisata</h2>
              <?php if (is_array($data['informasi'])): ?>
                <?php foreach ($data['informasi'] as $informasi): ?>
                    <p><?= htmlspecialchars($informasi) ?></p>
                <?php endforeach; ?>
            <?php endif; ?>

            
            <h2>Jam Operasional</h2>
            <div class="timeprice">
                <img src="assets/images/icon/Time.png" class="logo-image" style="height: 3%; width:3%;">
                <p><?= htmlspecialchars($data['waktu']) ?></p>
            </div>
   
            <h2>Harga Masuk</h2>
            <p>Rp<?= htmlspecialchars($data['harga']) ?>,-</p>
            <br>
            

            <h2>Galeri</h2>
            <div class="gallery-container">
            <?php if (is_array($data['galeri'])): ?>
                <?php foreach ($data['galeri'] as $galeri): ?>
                  <div class="pht-card">
                    <img src="<?= htmlspecialchars($galeri) ?>">
                  </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
            </div>
        </div>
        
    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
