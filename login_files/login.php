<?php
    session_start();
    if (isset($_POST['login']) && isset($_POST['pass'])) {
        include "$_SERVER[DOCUMENT_ROOT]/config.php";

        $db_host = "localhost";
        $db_user = "root";
        $db_password = "root";
        $db_base = "bd";
        $db_table = "users"; 

        $login = $_POST['login'];
        $password = $_POST['pass'];
        
        $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
        $authQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$result = $mysqli->query($authQuery)) {
            die('Ошибка запроса: '. $mysqli->error);
        }
        if (!$result->num_rows) {
            echo('<font color="red">Неверный логин или пароль!</font>');
        } else {
            $user = $result->fetch_assoc();
            if ($user['pass'] !== hash('md5', $pass)) {
                echo('<font color="red">Неверный логин или пароль!</font>');
            } else {
                $_SESSION['users'] = $user;
            }
        }
    }
    if (isset($_SESSION['users'])) {
        echo("<h1> " . $_SESSION['users']['name'] . "</h1>");?>
    <h1>YAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
        <?php
    }?>