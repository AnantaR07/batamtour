<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .footer {
            background-color: #149A75;
            color: white;
            padding: 20px 0;
        }

        .containerfooter {
            margin-top: 2%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left {
            display: flex;
            margin-left: 2%;
        }

        .left a {
            color: white;
            margin-right: 20px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .left a:hover {
            color: #EE9C22;
        }

        .right {
            display: flex;
            margin-right: 2%;
        }

        .right a {
            margin-left: 20px;
            text-decoration: none;
        }

        .right a img {
            width: 30px;
            height: auto;
        }
        .logo-image {
            height: 30px;
            width: 30px;
            transition: transform 0.3s ease;
        }

        .logo:hover .logo-image {
        transform: scale(1.2); /* Mengubah ukuran logo menjadi 1.2 kali lipat saat hover */
        }

        .separator {
            border: 0;
            border-top: 1px solid white;
            margin-top: 20px;
        }

        /* Teks di tengah */
        .center-text {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 3%;
        }
    </style>
</head>
<body>
    <div class="footer">
        <div class="containerfooter">
            <div class="left">
                <a href="index.php">Beranda</a>
                <a href="tentangkami.php">Tentang Kami</a>
            </div>
            <div class="right">
                <a href="#" class="logo">
                    <img src="assets/images/footer/ig.png" class="logo-image">
                </a>
                <a href="#" class="logo">
                    <img src="assets/images/footer/fb.png" class="logo-image">
                </a>
                <a href="#" class="logo">
                    <img src="assets/images/footer/linkin.png" class="logo-image">
                </a>
            </div>
        </div>
        <hr class="separator">
        <p class="center-text">BatamTour.com @ 2024 All rights reserved</p>
    </div>
</body>
</html>
