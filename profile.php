<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ваш профиль</title>
    <link rel="stylesheet" href="src/css/profile.css"> 
</head>
<body>
    <div class="form_wrap">
    <form>
        <div class="img_wrap">
        <img class="user_image" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    </div>
        <h2 class="user_name user_info">ВАШЕ ИМЯ: <?= $_SESSION['user']['name'] ?></h2>
        <br>
        <h2 class="user_login user_info">ВАШ ЛОГИН: <?= $_SESSION['user']['login'] ?></h2>
        <br>
        <a href="#" class="user_info">ВАШ EMAIL<?= $_SESSION['user']['email'] ?></a>
        <br>
        <a href="vendor/logout.php" class="logout  user_info buttons">ВЫХОД</a>
        <br>
        <a href="/index.php" class="buttons">НА ГЛАВНУЮ</a>

    </form>
</div>
</body>
</html>