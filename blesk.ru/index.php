<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Блеск - Салон красоты";
        require_once "bloks/head.php"?>
</head>
<body>

    <!-- Шапка -->
    <header class="header-main">
        <div class="container">
            <div class="header-main__inner">
                <div class="header-main__logo">Блеск</div>
                <nav class="header-main__nav">
                    <a class="header-main__nav__link" href="services.php">Услуги</a>
                    <a class="header-main__nav__link" href="about.php">О нас</a>
                    <a class="header-main__nav__link" href="adresses.php">Контакты</a>
                    <a class="header-main__nav__link" href="#">Online-запись</a>
                </nav>
                <div class="header-maincontacts">
                    <a href="tel:89999999999">+7 (999) 999 99 99</a>
                    <a href="#" class="contacts__logo" alt="Личный кабинет"><img src="/assets/img/lk2.png" width="30px"></a>
                </div>
            </div>
        </div>
    </header>

<!-- Секция с картинкой начальной -->
    <div class="intro">
        <div class="container"></div>
    </div>

    <div class="container">

        <!-- Секция "Почему мы?" -->
        <div class="intro__title">
            <p>Почему мы?</p>
        </div>
        <div class="intro2__content">
            <div class="intro2__content_object">
                <img clacc="intro2__ico" src="/assets/img/up1.png" alt="">
                <div class="intro2__text">Постоянный профессиональный рост наших мастеров</div>
            </div>
            <div class="intro2__content_object">
                <img clacc="intro2__ico" src="/assets/img/up1.png" alt="">
                <div class="intro2__text">Постоянный профессиональный рост наших мастеров</div>
            </div>
            <div class="intro2__content_object">
                <img clacc="intro2__ico" src="/assets/img/up1.png" alt="">
                <div class="intro2__text">Постоянный профессиональный рост наших мастеров</div>
            </div>
        </div>
        <div class="intro2__content">
            <div class="intro2__content_object">
                <img clacc="intro2__ico" src="/assets/img/up1.png" alt="">
                <div class="intro2__text">Постоянный профессиональный рост наших мастеров</div>
            </div>
            <div class="intro2__content_object">
                <img clacc="intro2__ico" src="/assets/img/up1.png" alt="">
                <div class="intro2__text">Постоянный профессиональный рост наших мастеров</div>
            </div>
            <div class="intro2__content_object">
                <img clacc="intro2__ico" src="/assets/img/up1.png" alt="">
                <div class="intro2__text">Постоянный профессиональный рост наших мастеров</div>
            </div>
        </div>



        <!-- Секция с услугами -->
        <div class="intro__title">
            <p>Услуги</p>
            <a href="#">Все услуги ></a>
        </div>
        <div class="intro3__services">
            <div class="intro3__item">
                <div class="intro3__item-img">
                    <img src="/assets/img/hair1.jpg" alt="" width="370px" border-radius="10px">
                </div>
                <div class="into3__text">Волосы</div>
            </div>
            <div class="intro3__item">
                <div class="intro3__item-img">
                    <img src="/assets/img/nail1.jpg" alt="" width="370px">
                </div>
                <div class="into3__text">Ногтевой сервис</div>
            </div>
            <div class="intro3__item">
                <div class="intro3__item-img">
                    <img src="/assets/img/makeup1.jpg" alt="" width="370px">
                </div>
                <div class="into3__text">Макияж</div>
            </div>
        </div>
        


        <!-- Секция с адресами -->
        <div class="intro__title">
            <p>Наши салоны</p>
            <a href="#">Все адреса ></a>
        </div>
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
    </div>


    <!-- Подвал -->
    <?php require_once "bloks/footer.php" ?>
</body>
</html>