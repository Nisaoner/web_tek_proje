<?php
// Olası hataları gizlemek yerine söylesin 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Formdan gelen verilerin POST metoduyla gelip gelmediğini kontrol ediyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Gelen verileri alıyoruz
    $isim = $_POST['isim'] ?? 'Belirtilmedi';
    $email = $_POST['email'] ?? 'Belirtilmedi';
    $telefon = $_POST['telefon'] ?? 'Belirtilmedi';
    $cinsiyet = $_POST['cinsiyet'] ?? 'Belirtilmedi';
    $konu = $_POST['konu'] ?? 'Belirtilmedi';
    $mesaj = $_POST['mesaj'] ?? 'Belirtilmedi';
    $onay = isset($_POST['onay']) ? 'Onaylandı' : 'Onaylanmadı';
    
// PHP'yi burada anlık olarak kapatıp, HTML'i açıyoruz
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0 fw-bold">Mesajınız Sunucuya Ulaştı!</h3>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-muted text-center mb-4">Aşağıdaki form verileri PHP tarafından başarıyla yakalanmıştır.</p>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col" style="width: 30%;">Form Alanı</th>
                                        <th scope="col">Gelen Veri</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">Ad Soyad</td>
                                        <td><?php echo htmlspecialchars($isim); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">E-posta</td>
                                        <td><?php echo htmlspecialchars($email); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Telefon</td>
                                        <td><?php echo htmlspecialchars($telefon); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Cinsiyet</td>
                                        <td><?php echo htmlspecialchars($cinsiyet); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Konu</td>
                                        <td><?php echo htmlspecialchars($konu); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Mesaj</td>
                                        <td><?php echo nl2br(htmlspecialchars($mesaj)); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">KVKK Onayı</td>
                                        <td><span class="badge bg-success"><?php echo htmlspecialchars($onay); ?></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="iletisim.html" class="btn btn-outline-dark fw-bold px-4">Forma Geri Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// HTML bittikten sonra PHP'yi tekrar açıp if sorgusunu kapatıyoruz
} else {
    // İzinsiz giriş yapanları geri yolluyoruz
    header("Location: iletisim.html");
    exit();
}
?>