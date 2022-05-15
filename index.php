<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Beni Hatırla</title>
</head>

<body>

    <div class="container mt-5">
        <div class="col-md-6 mx-auto">


            <h3 align="center">Beni Hatırla</h3>
            <hr>

            <?php
            if (@$_GET['durum'] == "no") { ?>
                <div class="alert alert-danger">
                    Giriş Başarısız!
                </div>
            <?php } else if (@$_GET['durum'] == "cikis") { ?>
                <div class="alert alert-success">
                    Başarıyla çıkış yapıldı!
                </div>
            <?php } ?>



            <?php
            if (isset($_SESSION['username'])) {  ?>
                <p> hoşgeldin @<?= $_SESSION['username']; ?></p>
                <a href="cikis.php"><button class="btn btn-danger btn-xs btn-block">Çıkış Yap</button></a>
            <?php } else { ?>
                <form action="islem.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kullanıcı Adı</label>
                        <input type="text" name="username" class="form-control"
                        <?php if (isset($_COOKIE['username'])) { ?>
                            value="<?= $_COOKIE['username']; ?>"
                            <?php }  else { ?>
                        placeholder="kullanıcı adınızı giriniz">
                            <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Şifre</label>
                        <input type="password" name="pass" class="form-control"
                        <?php if (isset($_COOKIE['pass'])) { ?>
                            value="<?= $_COOKIE['pass']; ?>"
                            <?php }  else { ?>
                        placeholder="şifrenizi giriniz">
                            <?php } ?>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="rememberMe" <?= isset($_COOKIE['username']) ? "checked" : "" ?> class="form-check-input">
                        <label class="form-check-label">Beni Hatırla</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="giris" class="btn btn-primary btn-xs">Giriş</button>
                    </div>
                </form>
        </div>
    </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>