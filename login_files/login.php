<?php

    session_start();
    require_once 'config.php';

    $login = $_POST['login'];
    $pass = md5($_POST['pass']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: /index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
