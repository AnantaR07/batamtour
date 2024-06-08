<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #149A75;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .navbar a {
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #EE9C22;
        }

        .navbar .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            align-items: center;
            margin-left: 25%;
        }

        .search-container {
            display: flex;
            align-items: center;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 50px;
            padding: 5px 10px;
        }

        .search-icon {
            font-size: 20px;
            color: #888;
            margin-right: 10px;
        }

        .search-input {
            border: none;
            outline: none;
            padding: 5px;
            font-size: 16px;
            border-radius: 50px;
        }

        .search-input::placeholder {
            color: #aaa;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 10px 0;
            }

            .menu {
                margin-right: 25%;
            }

            .navbar .menu, .search-container {
                margin-top: 10px;
                width: 80%;
                justify-content: center;
            }

            .search-container {
                order: -1;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#" class="logo">
            <img src="assets/images/navbar/logo.png" alt="MyWebsite Logo" class="logo-image" style="height: 40px; width:90px;">
        </a>
        <div class="menu">
            <a href="index.php">Beranda</a>
            <a href="wisata.php">Wisata</a>
            <a href="blog.php">Blog</a>
            <a href="tentangkami.php">Tentang Kami</a>
        </div>
        <div class="search-container">
            <span class="search-icon">&#128269;</span> <!-- Unicode search icon -->
            <input type="text" class="search-input" placeholder="Search...">
        </div>
    </div>
</body>
</html>
