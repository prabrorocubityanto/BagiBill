
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BagiBill - Split Bills Made Simple</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: #FFFFFF;
            color: #3F3828;
        }

        :root {
            --butter: #F6DC83;
            --butter-light: #FFF7DF;
            --butter-dark: #E9C65B;
            --brown: #3F3828;
            --white: #FFFFFF;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            padding: 22px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 15px rgba(0,0,0,0.04);
        }

        .logo {
            font-size: 27px;
            font-weight: 900;
            color: var(--brown);
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 35px;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--brown);
            font-size: 15px;
            font-weight: 700;
            transition: 0.2s;
        }

        .nav-menu a:hover {
            color: #B28B22;
        }

        .nav-button {
            background: var(--butter);
            padding: 11px 21px;
            border-radius: 30px;
        }

        .nav-button:hover {
            background: var(--butter-dark);
        }

        /* HERO */
        .hero {
            min-height: 570px;
            background: var(--butter-light);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 90px 8%;
        }

        .hero-content {
            max-width: 760px;
        }

        .hero-label {
            display: inline-block;
            background: #F6E8B8;
            color: #80651D;
            padding: 9px 20px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 2px;
            margin-bottom: 25px;
        }

        .hero h1 {
            font-size: clamp(38px, 6vw, 62px);
            line-height: 1.15;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #C49A2C;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.8;
            color: #756B55;
            max-width: 610px;
            margin: 0 auto 32px;
        }

        .main-button {
            display: inline-block;
            background: var(--butter);
            color: var(--brown);
            padding: 15px 30px;
            border-radius: 35px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 900;
            transition: 0.3s;
            box-shadow: 0 7px 18px rgba(190, 153, 51, 0.15);
        }

        .main-button:hover {
            background: var(--butter-dark);
            transform: translateY(-3px);
        }

        .hero-note {
            margin-top: 20px;
            font-size: 13px;
            color: #93866A;
        }

        /* SECTION GENERAL */
        section {
            padding: 85px 8%;
        }

        .section-heading {
            text-align: center;
            max-width: 650px;
            margin: 0 auto 45px;
        }

        .section-heading h2 {
            font-size: 34px;
            font-weight: 900;
            margin-bottom: 13px;
        }

        .section-heading p {
            color: #827965;
            line-height: 1.8;
        }

        /* ABOUT */
        .about {
            background: white;
            text-align: center;
        }

        .about-box {
            max-width: 850px;
            margin: auto;
            background: var(--butter-light);
            padding: 40px;
            border-radius: 25px;
            line-height: 1.9;
            color: #71664E;
        }

        .about-box strong {
            color: var(--brown);
        }

        /* HOW IT WORKS */
        .how-it-works {
            background: #FFFBF0;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            max-width: 1050px;
            margin: auto;
        }

        .step-card {
            background: white;
            padding: 32px 25px;
            border-radius: 22px;
            text-align: center;
            border: 1px solid #F4E9C9;
            transition: 0.3s;
        }

        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .step-number {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--butter);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 900;
            margin: 0 auto 20px;
        }

        .step-card h3 {
            font-size: 19px;
            margin-bottom: 12px;
        }

        .step-card p {
            color: #827965;
            font-size: 14px;
            line-height: 1.8;
        }

        /* CTA */
        .cta {
            background: var(--butter);
            text-align: center;
            padding: 70px 8%;
        }

        .cta h2 {
            font-size: 34px;
            font-weight: 900;
            margin-bottom: 15px;
        }

        .cta p {
            margin-bottom: 27px;
            color: #655633;
        }

        .cta .main-button {
            background: white;
        }

        /* FOOTER */
        footer {
            padding: 28px 8%;
            text-align: center;
            background: white;
            color: #8A806A;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {
            .navbar {
                padding: 18px 5%;
                flex-wrap: wrap;
                gap: 15px;
            }

            .nav-menu {
                gap: 15px;
                flex-wrap: wrap;
            }

            .nav-menu a {
                font-size: 12px;
            }

            .nav-button {
                padding: 8px 13px;
            }

            .hero {
                padding: 75px 6%;
            }

            .steps {
                grid-template-columns: 1fr;
            }

            section {
                padding: 65px 6%;
            }

            .section-heading h2,
            .cta h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="#home" class="logo">BagiBill</a>

        <div class="nav-menu">
            <a href="#home">Home</a>
            <a href="#tentang">Tentang</a>
            <a href="#cara-kerja">Cara Kerja</a>
            <a href="/create-bill" class="nav-button">Mulai Bagi Tagihan</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-label">SPLIT BILLS MADE SIMPLE</div>

            <h1>
                Makan Bareng,<br>
                <span>Bagi Tagihan</span> Tanpa Ribet!
            </h1>

            <p>
                Nggak perlu lagi repot menghitung tagihan satu per satu.
                BagiBill membantu kamu membagi biaya makan bersama teman
                dengan lebih mudah, praktis, dan transparan.
            </p>

            <a href="/create-bill" class="main-button">
                Mulai Bagi Tagihan →
            </a>

            <div class="hero-note">
                Praktis • Mudah • Transparan
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about" id="tentang">
        <div class="section-heading">
            <h2>Apa Itu BagiBill?</h2>
            <p>
                Kenalan lebih dekat dengan cara mudah membagi tagihan bersama.
            </p>
        </div>

        <div class="about-box">
            <strong>BagiBill</strong> adalah aplikasi berbasis web yang
            membantu pengguna menghitung dan membagi tagihan bersama
            berdasarkan pesanan masing-masing.

            Dengan BagiBill, kamu bisa mencatat pesanan setiap orang,
            menghitung total pembayaran secara otomatis, dan membagikan
            hasil pembagian tagihan dengan mudah.
        </div>
    </section>

    <!-- HOW IT WORKS SECTION -->
    <section class="how-it-works" id="cara-kerja">
        <div class="section-heading">
            <h2>Gimana Cara Kerjanya?</h2>
            <p>
                Cukup lakukan tiga langkah sederhana untuk membagi tagihan.
            </p>
        </div>

        <div class="steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3>Buat Tagihan</h3>
                <p>
                    Mulai dengan membuat tagihan baru dan masukkan
                    nama teman yang ikut.
                </p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <h3>Masukkan Pesanan</h3>
                <p>
                    Catat makanan dan minuman sesuai pesanan
                    masing-masing orang.
                </p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <h3>Bagikan Hasilnya</h3>
                <p>
                    Lihat hasil perhitungan otomatis dan bagikan
                    rincian tagihan kepada teman-teman.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta" id="mulai">
        <h2>Siap Bagi Tagihan?</h2>
        <p>
            Nggak perlu ribet lagi saat menghitung pembayaran bersama.
        </p>

       <a href="#home" class="main-button">
            Mulai Sekarang →
        </a>
    </section>

    <!-- FOOTER -->
    <footer>
        © 2026 BagiBill. Split Bills Made Simple.
    </footer>

</body>
</html>
