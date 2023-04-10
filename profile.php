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
    <link type="image/png" sizes="16x16" rel="icon" href="images/favicon.png">

</head>
<body>
    <div class="form_wrap">
    <form>
        <div class="img_wrap">
        <?php 
        if (isset($_SESSION['user']['avatar'])) {
            echo '<img class="user_image" src="' . $_SESSION['user']['avatar'] . '" width="200" alt="">';
        } else {
            echo '<img class="user_image" src="uploads/avatar_not_selected.png" width="200" alt="">';
        }
        ?>
        <h2 class="user_name user_info">ВАШЕ ИМЯ: <?= $_SESSION['user']['name'] ?></h2>
        <br>
        <h2 class="user_login user_info">ВАШ ЛОГИН: <?= $_SESSION['user']['login'] ?></h2>
        <br>
        <a href="#" class="user_email user_info "><strong>ВАШ EMAIL: </strong><?= $_SESSION['user']['email'] ?></a>
        <br>
        <p class="contact">Если у вас возникли какие-либо вопросы, вы можете связаться с нами по этому адресу: <strong><a href="mailto:officialgamestore7@gmail.com">officialgamestore7@gmail.com</a></strong></p>
        <br>
        <a href="vendor/logout.php" class="logout  user_info buttons">ВЫХОД</a>
        <br>
        <a href="/index.php" class="buttons">НА ГЛАВНУЮ</a>
        <br>
        <a href="vendor/settings.php">Settings</a>

    </form>
</div>
</body>
</html>