<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>batamtour</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php

$wisata = [
  [
    "id" => 1,
    "nama" => "Pantai Nongsa",
    "gambar" => "assets/images/index/Photo1.png",
    "deskripsi" => "Pantai Nongsa merupakan pantai pasir putih yang indah, terletak di sebelah utara Pulau Batam",
    "lokasi"=> "Sambau, Kecamatan Nongsa",
    "lokasiwisata" => "https://maps.app.goo.gl/fuZYhpAgVkXJjzRWA"
  ],
  [
    "id" => 2,
    "nama" => "Mega Wisata Ocarina",
    "gambar" => "assets/images/index/Photo2.png",
    "deskripsi" => "Mega Wisata Ocarina Batam adalah theme park dan tujuan wisata favorit di Batam. Taman ini dibangun di lahan seluas 40 hektar pada 2008.",
    "lokasi"=> "Sadai, Kecamatan Bengkong",
    "lokasiwisata" => "https://maps.app.goo.gl/2MZjdzLW3MaDCxGcA"
  ],
  [
    "id" => 3,
    "nama" => "Vihara Samudra",
    "gambar" => "assets/images/index/Photo3.png",
    "deskripsi" => "Loremipsumahbcdhs asbdcdjhanb dmbcj sjb adbjksxnkjdcbjk gsdcbajk ajgdxbjs csjdcg ajdg.",
    "lokasi"=> "Sambau, Kecamatan Nongsa",
    "lokasiwisata" => "https://maps.app.goo.gl/krWx7ExWAcz6oF8o8"
  ],
  [
    "id" => 4,
    "nama" => "Batam Adventure Park",
    "gambar" => "assets/images/index/Photo4.png",
    "deskripsi" => "Loremipsumahbcdhs asbdcdjhanb dmbcj sjb adbjksxnkjdcbjk gsdcbajk ajgdxbjs csjdcg ajdg.",
    "lokasi"=> "Sambau, Kecamatan Nongsa",
    "lokasiwisata" => "https://maps.app.goo.gl/tsq44QP7dkvJ5Ah58"
  ],

];

$kategoriWisata = [
    [
        "nama" => "Wisata Pantai",
        "gambar" => "assets/images/icon/pantai.png",
        "url" => "#",
    ],
    [
        "nama" => "Wisata Alam",
        "gambar" => "assets/images/icon/alam.png",
        "url" => "#",
    ],
    [
        "nama" => "Wisata Alam",
        "gambar" => "assets/images/icon/belanja.png",
        "url" => "#",
    ],
    [
        "nama" => "Wisata Alam",
        "gambar" => "assets/images/icon/kuliner.png",
        "url" => "#",
    ],
    [
        "nama" => "Wisata Alam",
        "gambar" => "assets/images/icon/religi.png",
        "url" => "#",
    ],
    [
        "nama" => "Wisata Alam",
        "gambar" => "assets/images/icon/budaya.png",
        "url" => "#",
    ],
    [
        "nama" => "Wisata Alam",
        "gambar" => "assets/images/icon/hiburan.png",
        "url" => "#",
    ],
    [
        "nama" => "Wisata Sejarah",
        "gambar" => "assets/images/icon/sejarah.png",
        "url" => "#",
    ],
  
  ];

?>
<body>

<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">

            <div class="container1">
                <div class="text-overlay">
                    <h1>Mulai Petualangan Anda: <br>Kota Batam, Kota Penuh Misteri dan Keindahan</h1>
                    <p>Beragam destinasi wisata yang memanjakan mata dengan pesona alam  <br> 
                    yang asri. Sederhanakan petualangan Anda dan ciptakan kenangan tak  <br> 
                    terlupakan di Pulau Batam yang memikat hati</p>
                </div>
                <img src="assets/images/index/con1.png" class="logo-image" style="height: auto; width:100%;">
            </div>
 
        <div class="container2">
                <h1>Rekomendasi Wisata</h1>
                <br>
                <p>Beragam destinasi wisata yang memanjakan mata dengan pesona alam Mempermudah untuk memilih wisata pilihanmu melalui <br> rekomendasi yang disajikan dengan berbagai macam wisata populer yang ada di Batam.</p>
        <div class="albumwisata">
        <?php foreach ($wisata as $data): ?>
        <div class="photo-card">
            <img src="<?= $data['gambar'] ?>" alt="<?= $data['nama'] ?>">
            <div class="info">
                <h2><?= $data['nama'] ?></h2>
                <hr>
                <p><?= $data['deskripsi'] ?></p>
                <div class="buttons">
                    <div class="btn-lokasi">
                    <button class="detail" onclick="window.location.href = '<?= htmlspecialchars($data['lokasiwisata']) ?>';">
                        <span class="icon" style="background-image: url('assets/images/icon/Vector.png');"></span>
                            <?= $data['lokasi'] ?>
                        </button>
                    </div>
                    <div class="btn-detail">
                        <button class="detail" onclick="window.location.href='detailwisata.php?id=<?= $data['id'] ?>'">Detail</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <br>
            <div class="btn-selengkapnya">
                <button class="detail">Selengkapnya</button>
            </div>
        </div>
        </div>

        <div class="container3">
            <div class="con-left">
                <h1>Jelajahi Keindahan Batam</h1>
                <p>Saksikan keindahan tempat wisata ataupun momen yang tertangkap pada kamera melalui galeri Batamtour</p>
                <div class="btn-selengkapnyadetail">
                    <button class="selengkapnya">Selengkapnya</button>
                </div>
            </div>
            <div class="con-right">
            <img src="assets/images/index/Wondeful.png" class="logo-image" style="height: auto; width:90%;">
            </div>
        </div>
    </div>

    <div class="container4">
            <div class="con-right">
            <img src="assets/images/index/kuningan.png" class="logo-image" style="height: auto; width:90%;">
            </div>
            <div class="con-left">
            <h1>Jangan Ketinggalan Pembaruan Wisata</h1>
                <p>Tetaplah update seputar wisata pada blog Batamtour. Menyajikan berita seputar pembaharuan terkini tempat wisata kegiatan, ataupun momen - momen yang ada dari berbagai website.</p>
                <div class="btn-selengkapnyadetail">
                    <button class="selengkapnya">Selengkapnya</button>
                </div>
            </div>
        </div>

        <div class="container5">
                <h1>Kategori Wisata</h1>
                <br>
                <p>Mempermudah untuk memilih wisata pilihanmu melalui beberapa jenis <br> kategori tempat wisata</p>
                <div class="albumcard">
                <?php foreach ($kategoriWisata as $data): ?>
                    <button class="card" type="button">
                        <img src="<?= $data['gambar'] ?>" alt="<?= $data['nama'] ?>">
                        <div class="infocard">
                        <br>
                        <h3><?= $data['nama'] ?></h3>
                        </div>
                    </button>
                    <?php endforeach; ?>
                </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
