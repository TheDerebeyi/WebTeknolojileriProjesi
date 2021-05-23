<html lang="tr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel='stylesheet' href='../css/main.css' type='text/css' />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
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
        <div class="row">
            <div class="col-md-12">
                <article>
                    <div class="yazi">
                        <div class="centered">
                            <form action="panel.php" method="post">
                                <table>
                                    <tr>
                                        <td colspan="3" style="height:fit-content; padding:3%; text-align:center;">
                                            <?php
                                                $hata = isset($_GET['hata'])? $_GET['hata'] : 0;
                                                if($hata == 1){
                                                    echo "Kullanıcı adı veya parola hatalı!<br>Lütfen tekrar deneyiniz.";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kullanıcı Adı</td>
                                        <td>:&nbsp;</td>
                                        <td><input type="text" name="Kullanici-Adi" id="" class="form-style-wide"></td>
                                    </tr>
                                    <tr>
                                        <td>Şifre</td>
                                        <td>:&nbsp;</td>
                                        <td><input type="password" name="Sifre" id="" class="form-style-wide"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input type="submit" value="Giriş Yap" class="form-style-button"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <footer>Sakarya Üniversitesi Web Teknolojileri 2020-2021 Bahar Dönemi Proje Ödevi</footer>
    </div>
    </div>
</body>

</html>