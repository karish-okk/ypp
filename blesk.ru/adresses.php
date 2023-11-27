<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Блеск - Контакты";
    require_once "bloks/head.php"?>
</head>
<body>

    <!-- Шапка -->
    <?php require_once "bloks/header.php" ?>
    
    <div class="container">
        <br>
        <p>Наши салоны</p>
        <div class="intro4__adresses">
            <div class="intro4__pictures">
                <div class="intro4__img1">
                    <img src="/assets/img/salon1.jpg" alt="">
                </div>
                <div class="intro4__img2">
                    <img src="/assets/img/salon2.jpg" alt="">
                </div>
                <div class="intro4__img3">
                    <img src="/assets/img/salon3.jpg" alt="">
                </div>
            </div>
            <div class="intro4__description">
                <p class="intro4__title">Менделеевская</p>
                <p class="text">м. Менделеевская/Новослободская</p>
                <p class="text">Новослободская улица, 19с1</p>
                <p class="text">+7 999 999 99 99</p>
            </div>
        </div>

        <p>Контакты</p>
        <div class="adresses">
            <div class="adresses__column">
                <span>Почта</span>
                <hr>
                <a href="to-emeil:test@mail.ru">test@mail.ru</a>
            </div>
            <div class="adresses__column">
                <span>Социальные сети</span>
                <hr>
                <a href="#">Иконки соцсетей</a>
            </div>
        </div>

        <div class="registration">
            <div class="registration__button">Записаться к нам!</div>
        </div>
    </div>

    
    <!-- Подвал -->
    <?php require_once "bloks/footer.php" ?>
</body>
</html>