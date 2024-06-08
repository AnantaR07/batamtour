<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>batamtour</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
$user = [
  [
    "id" => 0,
    "nama" => "Nur Hidayad",
    "gambar" => "assets/images/tentangkami/photo1.png",
    "jabatan" => "Hustler",
    "universitas" => "Universitas Maritim Raja Ali Haji",
    "ig" => "#",
    "linkedin" =>"#",
    "github" => "#"
  ],
  [
    "id" => 1,
    "nama" => "Yurike Anggraini",
    "gambar" => "assets/images/tentangkami/photo2.png",
    "jabatan" => "Hipster",
    "universitas" => "Universitas Maritim Raja Ali Haji",
    "ig" => "#",
    "linkedin" =>"#",
    "github" => "#"
  ],
  [
    "id" => 2,
    "nama" => "Amelia Dewi Puspita",
    "gambar" => "assets/images/tentangkami/photo3.png",
    "jabatan" => "Hipster",
    "universitas" => "Universitas Maritim Raja Ali Haji",
    "ig" => "#",
    "linkedin" =>"#",
    "github" => "#"
  ],
  [
    "id" => 3,
    "nama" => "Muhamad Rinaldi",
    "gambar" => "assets/images/tentangkami/photo4.png",
    "jabatan" => "Hacker",
    "universitas" => "Universitas Maritim Raja Ali Haji",
    "ig" => "#",
    "linkedin" =>"#",
    "github" => "#"
  ],
  [
    "id" => 4,
    "nama" => "Winona Lusiana",
    "gambar" => "assets/images/tentangkami/photo5.png",
    "jabatan" => "Hacker",
    "universitas" => "Universitas Maritim Raja Ali Haji",
    "ig" => "#",
    "linkedin" =>"#",
    "github" => "#"
  ],
  ]
?>
<body>

<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">

            <div class="container1">
            <div class="text-overlayBlog">
                <h1>Tentang Kami</h1>
            </div>
                <img src="assets/images/wisata/Mask.png" class="logo-image" style="height: auto; width:100%;">
                <br>
            </div>
 
        <div class="container2">
                <img src="assets/images/icon/Logo.png" class="logo-image" style="height: auto; width:25%;">
                <div class="tentang-website">
                    <div class="pmv">
                    <h2>Pengenalan</h2>
                    <p>Batamtour adalah website yang berisikan informasi tempat satanist yang update pada kota Batam, Kepulauan Riau, Indonesia.</p>
                    </div>
                    <div class="pmv">
                    <h2>Menyediakan</h2>
                    <p>Batamtour menyediakan berbagai tempat wisata yang tersusun mulai dari kategori hingga kecamatan. Batamtour juga memberikan deskripsi tempat wisata yang lengkap seperti lokasi, jam operasional, harga, dan fasilitas. Batamtour juga menyediakan galeri dan blog seputar wisata Batam.</p>
                    </div>
                    <div class="pmv">
                    <h2>Visi</h2>
                    <p>Menjadi portal wisata Batam terdepan yang menyediakan informasi lengkap dan inspiratif, memberdayakan wisatawan lokal dan internasional, serta mendorong kemajuan pariwisata berkelanjutan di Batam.</p>
                    </div>
                </div>
        </div>
        <div class="con-temuikami">
          <h2>Temui Kami</h2>
          <div class="list-user">
            <?php foreach ($user as $data): ?>
              <div class="user-card">
                <div class="photo-container">
                <img src="<?= htmlspecialchars($data['gambar']) ?>">
                </div>
                <h2 class="name"><?= htmlspecialchars($data['nama']) ?></h2>
                <p class="job-title"><?= htmlspecialchars($data['jabatan']) ?></p>
                <div class="social-icons">
                  <a href="<?= htmlspecialchars($data['ig']) ?>" target="_blank" class="social-icon">
                    <img src="assets/images/icon/instagram.png" alt="Instagram" style="height: auto; width:80%;">
                  </a>
                  <a href="<?= htmlspecialchars($data['linkedin']) ?>" target="_blank" class="social-icon">
                  <img src="assets/images/icon/linkedin.png" alt="Linkedin" style="height: auto; width:80%;">
                  </a>
                  <a href="<?= htmlspecialchars($data['github']) ?>" target="_blank" class="social-icon">
                  <img src="assets/images/icon/Github.png" alt="Github" style="height: auto; width:80%;">
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
</div>

        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
