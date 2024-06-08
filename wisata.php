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
    "id" => 0,
    "nama" => "Masjid Sultan Mahmud",
    "gambar" => "assets/images/wisata/Photo5.png",
    "deskripsi" => "Pantai Nongsa merupakan pantai pasir putih yang indah, terletak di sebelah utara Pulau Batam.",
    "lokasi"=> "Sambau, Kecamatan Nongsa",
    "gambarLokasi" => "assets/images/detailwisata/photo1.jpeg",
    "url" => "detailwisata.php",
    "lokasiwisata" => "https://maps.app.goo.gl/KRdXsBkSvLZKMuUR7"
  ],
  [
    "id" => 1,
    "nama" => "Pantai Nongsa",
    "gambar" => "assets/images/wisata/Photo1.png",
    "deskripsi" => "Pantai Nongsa merupakan pantai pasir putih yang indah, terletak di sebelah utara Pulau Batam",
    "lokasi"=> "Sambau, Kecamatan Nongsa",
    "gambarLokasi" => "assets/images/detailwisata/photo2.jpg",
    "url" => "detailwisata.php",
    "lokasiwisata" => "https://maps.app.goo.gl/fuZYhpAgVkXJjzRWA"
  ],
  [
    "id" => 2,
    "nama" => "Mega Wisata Ocarina",
    "gambar" => "assets/images/wisata/Photo2.png",
    "deskripsi" => "Mega Wisata Ocarina Batam adalah theme park dan tujuan wisata favorit di Batam. Taman ini dibangun di lahan seluas 40 hektar pada 2008.",
    "lokasi"=> "Sadai, Kecamatan Bengkong",
    "gambarLokasi" => "assets/images/detailwisata/photo3.jpg",
    "url" => "detailwisata.php",
    "lokasiwisata" => "https://maps.app.goo.gl/2MZjdzLW3MaDCxGcA"
  ],
  [
    "id" => 3,
    "nama" => "Vihara Samudra",
    "gambar" => "assets/images/wisata/Photo3.png",
    "deskripsi" => "Loremipsumahbcdhs asbdcdjhanb dmbcj sjb adbjksxnkjdcbjk gsdcbajk ajgdxbjs csjdcg ajdg.",
    "lokasi"=> "Sambau, Kecamatan Nongsa",
    "gambarLokasi" => "assets/images/detailwisata/photo4.jpg",
    "url" => "detailwisata.php",
    "lokasiwisata" => "https://maps.app.goo.gl/krWx7ExWAcz6oF8o8"
  ],
  [
    "id" => 4,
    "nama" => "Batam Adventure Park",
    "gambar" => "assets/images/wisata/Photo4.png",
    "deskripsi" => "Loremipsumahbcdhs asbdcdjhanb dmbcj sjb adbjksxnkjdcbjk gsdcbajk ajgdxbjs csjdcg ajdg.",
    "lokasi"=> "Sambau, Kecamatan Nongsa",
    "gambarLokasi" => "assets/images/detailwisata/photo5.jpg",
    "url" => "detailwisata.php",
    "lokasiwisata" => "https://maps.app.goo.gl/tsq44QP7dkvJ5Ah58"
  ],
];

?>
<body>

<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">

            <div class="container1">
                <div class="text-overlayWisata ">
                <h1>Wisata</h1>
                </div>
                <img src="assets/images/wisata/Mask.png" class="logo-image" style="height: auto; width:100%;">
                <br>
            </div>
 
        <div class="container2">
        <div class="btn-selengkapnyaWisata">
            <button class="detail">Kategori Wisata</button>
            <button class="detail">Filter Kecamatan</button>
        </div>
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
        </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
