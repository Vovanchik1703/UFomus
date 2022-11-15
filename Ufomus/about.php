<?php
session_start();
include 'logs.php';
if (array_key_exists('authorized', $_SESSION)) {
} else {
	$_SESSION['authorized'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ufomus</title>
    <link rel="apple-touch-icon" sizes="180x180" href="icons/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="icons/favicon/site.webmanifest">
    <link rel="mask-icon" href="icons/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <section id="promo" class="promo">
        <header class="header">
            <div class="header-wrapper"><a href="#course" class="header-wrapper__link">Каталог курсов</a> <a
                    href="#course" class="header-wrapper__link">Акции</a> <a href="./index.php"
                    class="header-wrapper__link"><img src="icons/Logo.svg" alt="logo" class="header-wrapper__logo">
                </a><a href="#about" class="header-wrapper__link">О компании</a> <a href=""
                    class="header-wrapper__link">Контакты</a>
                <div class="buttons"><button class="buttons__button buttons__button_white">Войти</button> <button
                        class="buttons__button buttons__button_black">Регистрация</button></div>
            </div>
        </header>
        <div id="modal" class="modal">
            <div class="modal__body">
                <div class="modal__content">
                    <a href="./index.php" class="modal__exit">x</a>
                    <div class="modal__title">Ufomus- одна из лидирующих площадок интернет обучения!</div>
                    <div class="modal__text">Мы предоставляем пользователям качественную среду для обучения , а так же
                        трудосутраиваем наших пользователей.
                    </div>
                    <img src="icons/Info_icon.svg" alt="Info_icon" class="modal__img"> 
                    <a href="#course" class="modal__link">Заинтересовался? тогда листай дальше, доперечня наших курсов
                    </a>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="footer-wrapper">
                    <div class="footer-wrapper-block">
                        <div class="footer-wrapper-block__links">
                            <div class="footer-wrapper-block__links__title">О курсах</div><a href="/index.php"
                            class="footer-wrapper-block__links__link">Курсы</a><br><a href="index.php"
                            class="footer-wrapper-block__links__link">Преподаватели</a><br><a href="/index.php"
                            class="footer-wrapper-block__links__link">Отзывы</a>
                        </div>
                        <div class="footer-wrapper-block__links">
                            <div class="footer-wrapper-block__links__title">Компания</div><a href="#about"
                                class="footer-wrapper-block__links__link">О нас</a><br><a href="/aboutUs.php"
                                class="footer-wrapper-block__links__link">Контакты</a>
                        </div>
                        <div class="footer-buttons"><button class="buttons__button buttons__button_white">Войти</button>
                            <button class="buttons__button buttons__button_black">Регистрация</button></div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-bottom__signature">© Photo, Inc. 2022. We love our users!</div>
                    <div class="footer-bottom__follow">
                        <div class="footer-bottom__follow__title">Follow us:</div>
                        <div class="footer-bottom__follow__links"><a href=""><img src="icons/Ellipse.svg" alt=""></a><a
                                href=""><img src="icons/Ellipse.svg" alt=""></a><a href=""><img src="icons/Ellipse.svg"
                                    alt=""></a><a href=""><img src="icons/Ellipse.svg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>