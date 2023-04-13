<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dinamis Kelas TKJ 28</title>
    <link rel="shortcut icon" href="images/0.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1 class="title">Aplikasi Nilai</h1>
        <h3 class="desc">Tabel Kelas dan Siswa</h3>
        <nav id="navigation">
            <ul>
                <li><a href="?m=home">Home</a></li>
                <li><a href="?m=about">Tentang</a></li>
                <li><a href="?m=jurusan">Jurusan</a></li>
                <li><a href="?m=siswa">Siswa</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php
        if (isset($_GET['m'])) {
            $m = $_GET['m'];
            switch ($m) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'jurusan':
                    include "jurusan/index.php";
                    break;
                case 'siswa':
                    include "siswa/index.php";
                    break;
                default:
                    include "404.php";
                    break;
            }
        } else {
            include('home.php');
        }
        ?>
    </div>
    <footer>
        &copy; Dibuat oleh <a href="https://muhidin.web.id" target="_blank" rel="noopener noreferrer">Kelas TKJ</a><br>
        Angkatan 28 - <a href="http://rumahgemilang.com" target="_blank" rel="noopener noreferrer">RGI</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>