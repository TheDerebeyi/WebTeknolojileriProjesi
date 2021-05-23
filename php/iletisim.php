<html lang="tr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel='stylesheet' href='../css/main.css' type='text/css' />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
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
            <div class="col-md-8 col-12">
                <article>
                    <div class="yazi">
                        <table>
                            <tr>
                                <td>Adı</td>
                                <td>:&nbsp;</td>
                                <td>
                                    <?php echo $_POST['ad'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Soyadı</td>
                                <td>:&nbsp;</td>
                                <td><?php echo $_POST['soyad'] ?></td>
                            </tr>
                            <tr>
                                <td>E-posta</td>
                                <td>:&nbsp;</td>
                                <td><?php echo $_POST['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Telefon</td>
                                <td>:&nbsp;</td>
                                <td><?php echo $_POST['tel'] ?></td>
                            </tr>
                            <tr>
                                <td>Yaşı</td>
                                <td>:&nbsp;</td>
                                <td><?php echo $_POST['yaş'] ?></td>
                            </tr>
                            <tr>
                                <td>Cinsiyeti</td>
                                <td>:&nbsp;</td>
                                <td><?php echo $_POST['cinsiyet'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Konu</td>
                                <td>:&nbsp;</td>
                                <td>
                                    <?php echo $_POST['select'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Mesaj</td>
                                <td>:&nbsp;</td>
                                <td><?php echo $_POST['mesaj'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="3"><?php  if(isset($_POST['geri-donüs'])){echo "Kullanıcı geri dönüş yapılmasını kabul etti."; }else{echo "Kullanıcı geri dönüş yapılmasını kabul etmedi.";}?></td>
                            </tr>
                        </table>
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