<?php
session_start();



if (isset($_POST['giris'])) {

    if ($_POST['username'] == "akardev" && $_POST['pass'] == "123456") {

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['pass'] = $_POST['pass'];

        if (isset($_POST['rememberMe'])) {
            //cookie olustur
            setcookie('username', $_POST['username'], time() + (86400 * 30), "/"); //86400 = 1 day
            setcookie('pass', $_POST['pass'], time() + (86400 * 30), "/");
        } else {
            //cookie sil
            setcookie('username', $_POST['username'], time() - (86400 * 30), "/");
            setcookie('pass', $_POST['pass'], time() - (86400 * 30), "/");
        }

        header("Location:index.php?durum=login");
        exit;
    } else {
        //giriş bilgileri doğru değilse...
        header("Location:index.php?durum=no");
        exit;
    }
}
