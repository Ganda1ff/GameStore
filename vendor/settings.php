<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}

require_once 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $avatar = $_FILES['avatar'];

    if (empty(trim($name))) {
        $_SESSION['message'] = 'Имя не может быть пустым';
        header('Location: settings.php');
        exit();
    }

    if (!empty(trim($pass))) {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%^&*()_+]).{8,}$/', $pass)) {
            $_SESSION['message'] = 'Пароль должен содержать не менее 8 символов, включая заглавные и строчные буквы, цифры и специальные символы';
            header('Location: settings.php');
            exit();
        }

        $pass = md5($pass);
        mysqli_query($connect, "UPDATE `users` SET `pass` = '$pass' WHERE `id` = '{$_SESSION['user']['id']}'");
        $_SESSION['user']['pass'] = $pass;
    }

    if (!empty($avatar['name'])) {
        $path = 'uploads/' . time() . $avatar['name'];
        if (!move_uploaded_file($avatar['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке файла';
            header('Location: settings.php');
            exit();
        }
        mysqli_query($connect, "UPDATE `users` SET `avatar` = '$path' WHERE `id` = '{$_SESSION['user']['id']}'");
        $_SESSION['user']['avatar'] = $path;
    }

    mysqli_query($connect, "UPDATE `users` SET `name` = '$name' WHERE `id` = '{$_SESSION['user']['id']}'");
    $_SESSION['user']['name'] = $name;
    $_SESSION['message'] = 'Профиль успешно обновлен';
    header('Location: ../profile.php');
    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Настройки профиля</title>
    <link rel="stylesheet" href="src/css/profile.css"> 
    <link type="image/png" sizes="16x16" rel="icon" href="images/favicon.png">

</head>
<body>
    <div class="form_wrap">
    <form method="POST" enctype="multipart/form-data">
        <div class="img_wrap">
            <img class="user_image" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
            <input type="file" name="avatar">
        </div>
        <label for="name">Имя:</label>
        <input type="text" name="name" value="<?= $_SESSION['user']['name'] ?>">
        <label for="pass">Новый пароль:</label>
        <input type="password" name="pass">
        <input type="submit" name="submit" value="Сохранить">
        <a href="../profile.php" class="buttons">Отмена