<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<header class="el_header">
    <div class="el_logo"><a href=""></a></div>
            <a href="" class="el_a">
                <button class="el_header_button">КАТАЛОГ ИГР</button>
            </a>
            <input class="el_header_input" type="text" placeholder="Введите название игры">
            <a href="#" class="el_a">
                <button class="el_header_button enter_button">ВОЙТИ</button>
            </a>
            <a class="el_shopping_cart" href="#"></a>
          
<!-- registration -->

<div class="login"></div>
<div class="reg_form">
    <div class="reg_flex">
            <form action="vendor/registration.php" method="POST"  enctype="multipart/form-data">
                <input type="text" placeholder="имя" name="name">
                <input type="file" name="avatar">
                <input type="text" placeholder="Логин" name="login">
                <input type="email" name="email" placeholder="Введите адрес своей почты">
            <input type="password"  id="password-input"  placeholder="Пароль" name="pass">
            <input type="password" name="verifyPass" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
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

<div class="login_form">
    <div class="login_flex">
        <form action="vendor/login.php" method="POST">
        <input type="text" placeholder="эл.почта или телефон" name="login">
        <input type="password" placeholder="пароль" name="pass">
        <button type="submit" class="el_header_button">Войти</button>

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


</header>
<main>
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="appear">
            <h1 class="el_h1_appear">ПОГРУЗИТЕСЬ В АТМОСФЕРУ США КОНЦА 19 ВЕКА В ИГРЕ, ГДЕ ДАЖЕ САМАЯ НЕЗНАЧИТЕЛЬНАЯ ДЕТАЛЬ ПРОРАБОТАНА ДО МЕЛОЧЕЙ. НОВЫЙ ШЕДЕВР ОТ ROCKSTAR</h1>
            <a href="#"><button class="el_button_appear">В КОРЗИНУ</button></a>
        </div>
        <div class="price">
            <h3 class="price_number">899₽</h3>
            <h3 class="discount_amount">50%</h3>
        </div>
        <!-- <a href="#"><img class="el_image_blured" src="images/rdr2.jpg" style="width:100%"></a> -->
        
        
    </div>

    <div class="mySlides fade">
    <div class="appear">
            <h1 class="el_h1_appear">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui amet eaque odio fuga quos. Recusandae nesciunt earum reiciendis iusto! Est dolore iusto consequuntur, esse minima possimus aspernatur dolor suscipit? Nisi.</h1>
            <a href="#"><button class="el_button_appear">В КОРЗИНУ</button></a>
        </div>
        
        <div class="price">
            <h3 class="price_number">899₽</h3>
            <h3 class="discount_amount">50%</h3>
        </div>
    </div>

    <div class="mySlides fade">
    <div class="appear">
            <h1 class="el_h1_appear">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit perspiciatis praesentium facilis reprehenderit quas non nobis eaque, quibusdam itaque qui amet labore soluta ad cumque error deserunt ipsa quis corporis.</h1>
            <a href="#"><button class="el_button_appear">В КОРЗИНУ</button></a>
        </div>
        
        <div class="price">
            <h3 class="price_number">899₽</h3>
            <h3 class="discount_amount">50%</h3>
        </div>
        >
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<container class="items_for_sale">
    <h1 class="items_for_sale_heading">ВСЕ ИГРЫ</h1>
    <div class="shopping_list">
    <div class="shop_item">
        <img src="images/vertical_images/rdr2_vertical.jpg" alt="">
        <div class="shop_item_description">
            <a href="#"><h3 class="shop_item_name">Red Dead Redemption 2</h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price">899₽</h3>
        
                <button class="add_to_cart">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart"></button>

            </div>
        </div>
    </div>

</div>
<div class="switch_page">
    <ul class="switch_page_ul">
        
        <a href="#"><li class="switch_page_li">1</li></a>
        <a href="#"><li class="switch_page_li">2</li></a>
        <a href="#"><li class="switch_page_li">3</li></a>
        <a href="#"><li class="switch_page_li">4</li></a>
        <a href="#"><li class="switch_page_li">5</li></a>
    </ul>


</div>
</container>


</main>
<script src="src/js/slide_gallery.js"></script>
<script src="src/js/switch_page.js"></script>
<script src="src/js/login.js"></script>

</body>
</html>