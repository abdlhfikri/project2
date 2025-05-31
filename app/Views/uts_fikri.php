<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ujian Tengah Semester</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- STYLES -->

    <style {csp-style-nonce}>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            margin: 0;
            padding: 0; 
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif; 
        }

        body {
            color: white;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 10%;
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 25px;
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .navbar a {
            font-size: 18px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            margin-left: 35px;
        }

        .beranda {
            height: 100vh;
            background-image: url(bgweb.jpeg);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            padding: 0 10%;
        }

        .beranda-konten {
            max-width: 600px;
        }

        .beranda-konten h1 {
            font-size: 45px;
            font-weight: 700;
            line-height: 1.2;
        }

        .beranda-konten h3 {
            font-size: 22px;
            font-weight: 700;
            color: aquamarine;
        }

        .beranda-konten p {
            font-size: 16px;
            margin: 20px 0 40px;
        }

        .beranda-konten .btn-box {
            display: flex;
            justify-content: space-between;
            width: 345px;
            height: 50px;
        }

        .btn-box a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 100%;
            background: aquamarine;
            border: 2px solid aquamarine;
            border-radius: 8px;
            font-size: 19px;
            color: black;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .btn-box a:nth-child(2) {
            background: transparent;
            color: white;
        }

        .beranda-sci {
            position: absolute;
            bottom: 40px;
            width: 170px;
            display: flex;
            justify-content: space-between;
        }

        .beranda-sci a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 2px solid aqua;
            border-radius: 50%;
            font-size: 20px;
            color: aqua;
            text-decoration: none;
        }        
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
    <header>
        <a href="#" class="logo">Abdullah</a>

        <nav class="navbar">
            <a href="#">Beranda</a>
            <a href="#">Tentang</a>
            <a href="#">Layanan</a>
            <a href="#">Portofolio</a>
            <a href="#">Kontak</a>
        </nav>
    </header>

    <section class="beranda">
        <div class="beranda-konten">
            <h1>Hallo, Saya Abdullah Fikri</h1>
            <h3>Saya dari Teknik Informatika Semester 6</h3>
            <p>Perkenalkan nama saya Abdullah Fikri dari Prodi Teknik Informatika di Universtias Nahdlatul Ulama Indonesia, saya berasal dari Karawang dan saat ini saya berdomisili Bogor. Saya lahir tepat pada hari selasa, 17 Agustus 1998 di Kabupaten Karawang.</p>
            <div class="btn-box">
                <a href="#">Masuk</a>
                <a href="#">Kenalan Yuk</a>
            </div>
        </div>

        <div class="beranda-sci">
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-youtube' ></i></a>
        </div>
    </section>
</body>
</html>
