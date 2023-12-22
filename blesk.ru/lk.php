<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Блеск - Услуги";
    require_once "bloks/head.php"?>
</head>

<style>
    .text {
        margin: 0;
    }
</style>

<body>
    <!-- Шапка -->
    <?php require_once "bloks/header.php" ?>


    <div class="container">
        <p>Личный кабинет</p>

        <div class="user">
            <!-- Персональная информация -->
            <div class="user__contant">
                <div class="user__info">
                    <div class="user__photo">
                        <img src="assets/img/user.png" alt="" width="150px">
                    </div>
                    <div class="user__perconal">
                        <p class="text">Фамилия Имя Отчество
                        <br>Номер телефона 88888888888
                        <br>Дата рождения ДД.ММ.ГГГГ
                        <br>Пол: Женский</p>
                    </div>
                </div>
            </div>
            <!-- Бонусная карта -->
            <div class="user__contant">
                <img src="assets/img/card.png" alt="" width="500px" >
            </div>
        </div>

        <div class="future-service">
            <p>Предстоящие услуги</p>
            <hr>
            <div class="future-service__services">
                <div class="future-service__item">
                    <div class="future-service__pivot">.</div>
                    <p class="text">Маникюр. Сложный дизайн
                        <br>Мастер: Анастасия
                        <br>Дата: 30.12.2023
                        <br>Время 12:00
                        <br>Филиал ТЦ КЗ</p>
                    </p>
                </div>

                <div class="future-service__item">
                    <div class="future-service__pivot">.</div>
                    <p class="text">Маникюр. Сложный дизайн
                        <br>Мастер: Анастасия
                        <br>Дата: 30.12.2023
                        <br>Время 12:00
                        <br>Филиал ТЦ КЗ</p>
                    </p>
                </div>
            </div>

            <p>Прошлые услуги</p>
            <hr>

            <div class="future-service__services">
                <div class="future-service__item">
                    <div class="future-service__pivot">.</div>
                    <p class="text">Маникюр. Сложный дизайн
                        <br>Мастер: Анастасия
                        <br>Дата: 30.12.2023
                        <br>Время 12:00
                        <br>Филиал ТЦ КЗ</p>
                    </p>
                </div>

                <div class="future-service__item">
                    <div class="future-service__pivot">.</div>
                    <p class="text">Маникюр. Сложный дизайн
                        <br>Мастер: Анастасия
                        <br>Дата: 30.12.2023
                        <br>Время 12:00
                        <br>Филиал ТЦ КЗ</p>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- Подвал -->
    <?php require_once "bloks/footer.php" ?>

    <script defer src="scripts/popup.js"></script>
    <script defer src="scripts/login.js"></script>
</body>