<?php

    session_start();
    require_once 'config.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $verifyPass = $_POST['verifyPass'];

    


        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../index.php');
        }

        
        $pass = md5($pass);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `pass`, `avatar`) VALUES (NULL, '$name', '$login', '$email', '$pass', '$path')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../profile.php');


    

?>
