<?php
// Formdan gelen verileri çekiyoruz
$email = $_POST['email'] ?? '';
$sifre = $_POST['sifre'] ?? '';

// 1. KONTROL: Alanlar boş mu?
if (empty($email) || empty($sifre)) {
    header("Location: login.html?empty=1");
    exit();
}

// Hocanın ödevde istediği doğru giriş bilgileri
$dogru_email = "b251210069@sakarya.edu.tr";
$dogru_sifre = "b251210069";

// 2. KONTROL: Bilgiler doğru mu?
if ($email === $dogru_email && $sifre === $dogru_sifre) {
    // Bilgiler doğruysa gösterilecek başarı sayfası (Menü eklendi)
    echo '<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giriş Başarılı</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg-light d-flex flex-column min-vh-100">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container">
                <a class="navbar-brand" href="index.html">Projem</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Ana Sayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="hakkinda.html">Hakkında</a></li>
                        <li class="nav-item"><a class="nav-link" href="ozgecmis.html">Özgeçmiş</a></li>
                        <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                        <li class="nav-item"><a class="nav-link" href="mirasimiz.html">Mirasımız</a></li>
                        <li class="nav-item"><a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                        <li class="nav-item"><a class="nav-link text-warning fw-bold" href="login.html">Giriş Yap</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container flex-grow-1 d-flex align-items-center justify-content-center">
            <div class="text-center bg-white p-5 rounded shadow-lg border-top border-5 border-success w-100" style="max-width: 500px;">
                <h1 class="text-success mb-3 fw-bold">Başarılı Giriş!</h1>
                <h3>Hoşgeldiniz, <span class="text-primary">b251210069</span></h3>
                <p class="text-muted mt-3">Kimlik doğrulama işlemi başarıyla tamamlandı.</p>
                <a href="index.html" class="btn btn-outline-dark mt-4 fw-bold">Ana Sayfaya Dön</a>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
} else {
    // Bilgiler hatalıysa
    header("Location: login.html?error=1");
    exit();
}
?>