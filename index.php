<?php
session_start();

if ($_SESSION['user']) {
    
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/css/normalize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" sizes="16x16" rel="icon" href="images/favicon.png">

    <title>Главная</title>
</head>
<body>
<header class="el_header">
    <div class="el_logo"><a href=""></a></div>
            <a href="" class="el_a">
                <button class="el_header_button catalog_button">КАТАЛОГ ИГР</button>
            </a>
            <input class="el_header_input" type="text" placeholder="Введите название игры">
            <a href="vendor/authorization_form.php" class="el_a">
                <button class="el_header_button enter_button">ВОЙТИ</button>
            </a>
            <a class="profile_href" href="profile.php" style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></a>

            <?php 
                if (!empty($_SESSION['user'])) {
                    ?>
                <script src="src/js/logout_button.js">
                    </script>
                    <?php
                }
            ?>
            <a class="el_shopping_cart" href="#"></a>


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

        <form action="cart.php" method="POST">

                <button class="add_to_cart" name="add_to_cart">В КОРЗИНУ</button>

            </div>
        </div>
    </div>
    </form>

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
          
<li class="list_style"><a href="#" id="link1" class="link">1</a></li>
  <li class="list_style"><a href="#" id="link2" class="link">2</a></li>
  <li class="list_style"><a href="#" id="link3" class="link">3</a></li>
  <li class="list_style"><a href="#" id="link4" class="link">4</a></li>
  <li class="list_style"><a href="#" id="link5" class="link">5</a></li>

</div>

</container>

<h1 class="comments_header">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h1>
<?php
if (!empty($_SESSION['user'])) { ?>

<div class="comment_bar">
<form method="POST" action="">
    <div class="comment_left">

    <label for="comment"></label>
    <textarea id="comment_textarea" placeholder="НАПИШИТЕ СЮДА СВОИ ВПЕЧАТЛЕНИЯ ОТ НАШЕГО МАГАЗИНА" name="comment" id="comment" required></textarea>

    <input class="comment_button" type="submit" name="submit" value="ОПУБЛИКОВАТЬ ОТЗЫВ">
</div>

</form>
<?php
}
?>
<div class="comment_right">
<?php

session_start();

$db = new mysqli('localhost', 'root', 'root', 'bd');

if (isset($_POST['submit'])) {
    $name = $_SESSION['user']['name'];
    $comment = $_POST['comment'];

    // Check if user already submitted a comment
    $query = "SELECT * FROM comments WHERE name='$name'";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        echo "<strong class='comment_strong_red_alert' color='red'>ВЫ УЖЕ ОСТАВИЛИ ОТЗЫВ</strong>";
    } else {
        // Insert new comment into database
        $query = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
        $db->query($query);
    }
}

// Select all comments from database and display them
$query = "SELECT * FROM comments";
$result = $db->query($query);

while ($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $comment = $row['comment'];
    $date = $row['date'];

    echo "<div class='comment'>";
    echo "<strong>$name:</strong> $comment";
    echo "<br><small>$date</small>";
    echo "<hr>";
    echo "</div>";
}

?>
</div>
</div>

</main>

<script src="src/js/slide_gallery.js"></script>
<script src="src/js/switch_page.js"></script>

</body>
</html>