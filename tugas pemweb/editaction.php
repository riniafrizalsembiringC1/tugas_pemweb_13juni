<?php
    session_start();
    if($_SESSION['is_logged_in'] !=TRUE)
    {
        header("Location: form.php");
    }
    $user = $_POST['username'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $id = $_POST['userid'];

    if($_SPOT['password'] == "")
    {
        $k->query("query update tanpa password");
    }

    else
    {
        $paswd = md5(sha1($_POST['paswd']));
        $k->query("query update dengan password");
    }

    header("location: main.php");
