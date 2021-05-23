<html lang="tr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel='stylesheet' href='../css/main.css' type='text/css' />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>

<body>
        <header>
            <div class="çerçeve">
                <div class="iç">
                    Mert Kahraman
                </div>
            </div>
        </header>
        <nav>
            <div>
                <ul>
                <li><a href="../index.html">Ana Sayfa</a></li>
                    <li><a href="../ozgecmis.html">Özgeçmiş</a></li>
                    <li><a href="../ilgialanlari.html">İlgi Alanlarım</a></li>
                    <li><a href="../sehrim.html">Şehrim</a></li>
                    <li><a href="../miras.html">Mirasımız</a></li>
                    <li><a href="../iletisim.html">İletişim</a></li>
                    <li><a href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sd-12">
                <article>
                    <div class="yazi">
                        <?php
                        $kullaniciAdi = $_POST['Kullanici-Adi'];
                        $sifre = $_POST['Sifre'];

                        if (strpos($kullaniciAdi, '@') && substr($kullaniciAdi, strpos($kullaniciAdi, '@'), 2) != '@') {
                            if (substr($kullaniciAdi, 0, strpos($kullaniciAdi, '@')) == $sifre) {
                                echo "Başarıyla giriş yapıldı!<br><br>Kullanıcı Adı: " . $_POST['Kullanici-Adi'] . "<br>Şifre: " . $_POST['Sifre'];
                            } else {
                                header("Location: login.php?hata=1");
                            }
                        }
                        else{
                            header("Location: login.php?hata=1");
                        }
                        ?>

                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <aside>
                </aside>
            </div>
        </div>
    </div>
    <footer>Sakarya Üniversitesi Web Teknolojileri 2020-2021 Bahar Dönemi Proje Ödevi</footer>
    </div>
    </div>
    <script src="../js/iletisim.js"></script>
</body>

</html>