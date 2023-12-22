<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Блеск - Услуги";
    require_once "bloks/head.php"?>
</head>


<body>
    <!-- Шапка -->
    <?php require_once "bloks/header.php" ?>



    <!-- Основной блок -->
    <!-- это нужно реализовать с помощью цикла while при выводе данных из бд -->
    <!-- А то пока что это копипаст сплошной -->
    <div class="container">
        <div class="services__header">
            <div id="services-hair" class="services__header-block">
                Волосы
            </div>
            <div id="services-nail" class="services__header-block">
                Ногтевой сервис
            </div>
            <div id="services-make-up" class="services__header-block">
                Макияж
            </div>
            <div id="services-kombo" class="services__header-block">
                Комбо
            </div>
        </div>

        <p class="services__title">Стрижки</p>
        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>
        
        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>

        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>

        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>
        
        <div class="services__object">
            <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
            <div class="services__object-price">600</div>
        </div>


        <p class="services__title">Укладки</p>
        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>
        
        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>

        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>

        <div>
            <div class="services__object">
                <div class="services__object-name">Женская стрижка (длина волос до 25 см)</div>
                <div class="services__object-price">600</div>
            </div>
            <hr>
        </div>


        <div class="registration">
            <div class="registration__button">Записаться к нам!</div>
        </div>

    </div>


    <!-- Подвал -->
    <?php require_once "bloks/footer.php" ?>

    <script defer src="scripts/popup.js"></script>
    <script defer src="scripts/login.js"></script>
    
</body>
</html>