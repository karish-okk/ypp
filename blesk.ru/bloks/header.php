<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="index.php" class="header__logo">Блеск</a>
            <nav class="nav">
                <a class="nav__link" href="services.php">Услуги</a>
                <a class="nav__link" href="about.php">О нас</a>
                <a class="nav__link" href="adresses.php">Контакты</a>
                <a class="nav__link" href="#">Online-запись</a>
            </nav>
            <div class="contacts">
                <a href="tel:89999999999" class="contacts__tel" >+7 (999) 999 99 99</a>
                <a href="#" class="contacts__logo open_popup" alt="Личный кабинет" id="open-popup" ><img src="/assets/img/lk1.png" width="30px"></a>
            </div>
        </div>
    </div>
</header>
<!-- ВСПЛЫВАЮЩЕЕ ОКНО ДЛЯ ВХОДА В СИСТЕМУ -->
<div class="popup" id="popup" >
    <div class="popup__container">
        <div class="popup__body" >

            <div class="photo-section">
                <img src="/assets/img/login_pct.jpg" width="100%">
            </div>

            <!-- ЗАГОЛОВОК ВЫБОР ПОПАПА -->
            <div class="formbox" >
                <div class="form-title">
                    <button class="form-title_btn" onclick="showLoginForm()">Вход</button>
                    <button class="form-title_btn" onclick="showRegistrationForm()">Регистрация</button>
                </div>

                <!-- ТУТ ВЫСВЕЧИВАЮТСЯ ФОРМЫ -->
                <div class="login-section" id="popup1" >
                    <div class="form">

                        <!-- ПЕРВАЯ ФОРМА ДЛЯ ВХОДА -->
                        <form class="loginForm" action="/login" method="post" id="loginForm">

                            <div class="input-box">
                                <label for="">Эл. почта</label>
                                <input type="email" name="username" id="">
                            </div>

                            <div class="input-box">
                                <div class="input-box__label">
                                    <label for="">Пароль</label>
                                    <a href="#" >Забыли пароль?</a>
                                </div>
                                <input type="password" name="password">
                            </div>
                            
                            <a href="lk.php" ><button class="login-button" >Вход</button></a>
                        </form>


                        <!-- ВТОРАЯ ФОРМА ДЛЯ РЕГИСТРАЦИИ -->
                        <form class="registrationForm" action="/registration" method="post" id="registrationForm">
                            <div class="input-box">
                                <label for="">Имя</label>
                                <input ype="text" name="name" id="">
                            </div>

                            <div class="input-box">
                                <label for="">Эл. почта</label>
                                <input type="email" name="email" id="">
                            </div>

                            <div class="input-box">
                                <label for="">Пароль</label>
                                <input type="password" name="password" id="">
                            </div>

                            <a href="lk.php" ><button class="login-button">Регистрация</button></a>

                        </form>


                    </div>
                </div>
            </div>
            <div class="popup__close close_popup" id="close-popup" >&#10006</div>
        </div>
    </div>
</div>

<script defer src="scripts/popup.js"></script>
<script defer src="scripts/login.js"></script>