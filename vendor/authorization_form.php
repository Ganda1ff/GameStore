<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/css/authorization_style.css">
</head>
<body>
    <div class="reg">
<div class="reg_form">
<div class="heading_block">
<h1>СОЗДАЙТЕ АККАУНТ</h1>
<hr>
</div>
            <form action="registration.php" method="POST"  enctype="multipart/form-data">
                <input type="text" placeholder="ВАШЕ ИМЯ" name="name">
                <input type="file" name="avatar">
                <input type="text" placeholder="ПРИДУМАЙТЕ ЛОГИН" name="login">
                <input type="email" name="EMAIL ИЛИ НОМЕР ТЕЛЕФОНА" placeholder="Введите адрес своей почты">
            <input type="password"  id="password-input"  placeholder="ПАРОЛЬ" name="pass">
        <button type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>
        <a href="#" class="reg_a">У меня уже есть аккаунт</a>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
</form>
</div>
</div>
<!-- authorization -->
<div class="login">
<div class="login_form">
    <div class="heading_block">
    <h1>ВОЙДИТЕ В АККАУНТ</h1>
    <hr>
</div>
        <form action="login.php" method="POST">
        <input type="text" placeholder="EMAIL ИЛИ НОМЕР ТЕЛЕФОНА" name="login">
        <input type="password" placeholder="ПАРОЛЬ" name="pass">
        <button type="submit" class="el_header_button login_button">ВОЙТИ</button>

        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>

    </form>
    <a href="#" class="a_login">Если у вас нет аккаунта</a>
</div>
</div>
<script src="../src/js/login.js"></script>
</body>
</html>