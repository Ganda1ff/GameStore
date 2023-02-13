<?php
include "$_SERVER[DOCUMENT_ROOT]/config.php";

if (isset($_POST['login']) && isset($_POST['pass'])){
$registrationSuccess = true;


$name= $_POST['name'];
$login = $_POST['login'];
$pass = $_POST['pass'];

$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_base = "bd";
$db_table = "users"; 
}

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
        
        if ($mysqli->connect_error) {
            die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }
        
        $loginQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$loginSelect = $mysqli->query($loginQuery)) {
            $registrationSuccess = false;
            die('Ошибка запроса: '. $mysqli->error);
        } else {
            if ($loginSelect->num_rows) {
                $registrationSuccess = false;
                ?> 
                <h1>Введенный логин уже существует!</h1>
                
                <?php
                exit;
                
                
            }
        }

        $result = $mysqli->query("INSERT INTO ".$db_table." (login, pass, name) VALUES ('$login', '$pass', '$name')");
        
        if ($result == true){
            
    ?>
    <h1>HELLLLLLL YEEEEAH</h1>
    <a href="login_form.php">Войти в аккаунт</a>

<?
            }else{
    ?>
    <h2>Упс, вышла ошибка( <a href="/registration_form">Пожалуйста, попробуйте ещё</a></h2>
    <?
            }
        
?>   