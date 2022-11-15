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
    <section class="promo">
        <header class="header">
            <div class="header-wrapper"><a href="#course" class="header-wrapper__link">Каталог курсов</a> <a
                    href="#course" class="header-wrapper__link">Акции</a> <a href="./index.php"
                    class="header-wrapper__link"><img src="icons/Logo.svg" alt="logo" class="header-wrapper__logo">
                </a><a href="./aboutUs.php" class="header-wrapper__link">О компании</a> <a href="./contacts.php"
                    class="header-wrapper__link">Контакты</a>
                <div class="buttons"><a href="login.php"><button
                            class="buttons__button buttons__button_white">Войти</button></a> <a href="sign.php"><button
                            class="buttons__button buttons__button_black">Регистрация</button></a></div>
            </div>
        </header>
        <div class="container">
            <div class="promo__block">
                <h1 class="title">Хочешь самосовершенствоваться и развиваться?<br>Тогда тебе точно к нам!</h1><button
                    class="button buttons__button__promo">Подробнее</button>
            </div>
        </div>
    </section>
    <section class="sale">
        <div class="container">
            <div class="sale__block">
                <h2 class="title_min">Осення расспродажа!</h2>
                <div class="sale__descr">Успей купить курсы пока они не подорожали<br><span>Скидка 50% на курсы
                        психологии и it-сферы.</span></div><button
                    class="buttons__button buttons__button_yellow">Покупаю!</button>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="about-block">
                <div class="about-block__cloud">Выбирая нас вы гарантированно получите знания от ведущих специалистов
                    выбранной<br>отрасли!</div>
                <div class="about-block__cloud">Наши преподаватели всегда на связи<br>с учениками и готовы помочь!</div>
                <div class="about-block__cloud">Специально разработанная система обучения<br>позволяет обучающимся
                    сосредочиться<br>на учебе!</div>
            </div>
        </div>
    </section>
    <section id="course" class="course">
        <div class="container">
            <div class="course-navigation">
                <div class="course-navigation__input"><input type="text"> <img class="course-navigation__input__loupe"
                        src="icons/loupe_icon.svg" alt=""></div>
                <div class="course-navigation__links"><a href="./IT.php"
                        class="course-navigation__links__link">It-сфера</a> <a href="./english.php"
                        class="course-navigation__links__link">Иностранные языки</a> <a href="./psychology.php"
                        class="course-navigation__links__link">Психология</a> <a href="./marketing.php"
                        class="course-navigation__links__link">Маркетинг</a></div>
            </div>
            <div class="course-block">
                <div class="course-block__line"></div>
                <div class="course-block__wrapper">
                    <h2 class="title_min title_white">Маркетинг</h2>
                    <div class="course-block__wrapper__content">
                        <div class="course-block__wrapper__content__card course-block__wrapper__content__card_red">
                            <div class="course-block__wrapper__content__card__block">
                                <div class="course-block__wrapper__content__card__block__title">Структура бизнеса</div>
                                <div class="course-block__wrapper__content__card__block__cost">Стоимость курса <span
                                        class="course-block__wrapper__content__card__block__cost_existing">15000</span>
                                </div>
                                <div class="buttons__button buttons__button_pink">В корзину</div>
                                <div class="course-block__wrapper__content__card__block__time">8 месяцев*</div>
                            </div>
                            <div class="course-block__wrapper__content__card__image"><img src="img/sryktyra.png"
                                    alt="web"></div>
                        </div>
                        <div class="course-block__wrapper__content__card course-block__wrapper__content__card_green">
                            <div class="course-block__wrapper__content__card__block">
                                <div
                                    class="course-block__wrapper__content__card__block__title course-block__wrapper__content__card__block__title_center">
                                    Интернет-<br>маркетолог</div>
                                <div class="course-block__wrapper__content__card__block__cost">Стоимость курса <span
                                        class="course-block__wrapper__content__card__block__cost_existing">12000</span>
                                </div>
                                <div class="buttons__button buttons__button_pink">В корзину</div>
                                <div class="course-block__wrapper__content__card__block__time">6 месяцев*</div>
                            </div>
                            <div class="course-block__wrapper__content__card__image"><img src="img/inet.png" alt="web">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teacher">
        <div class="container">
            <h2 class="title title_min title_white">Наши ведущие преподаватели!</h2>
            <div class="teacher-block">
                <div class="teacher-block__card teacher-block__card_yellow"><img src="img/emil.png" alt=""
                        class="teacher-block__card__photo">
                    <div class="teacher-block__card__name">Эмиль</div>
                    <div class="teacher-block__card__descr">Полиглот иностранных языков, который обучит вас свободно
                        говорить на ведущих международных языках!</div>
                </div>
                <div class="teacher-block__card teacher-block__card_cream"><img src="img/oksana.png" alt=""
                        class="teacher-block__card__photo">
                    <div class="teacher-block__card__name">Оксана</div>
                    <div class="teacher-block__card__descr">Ведущий дизайнер наших курсов, всегда на позитиве и готова
                        помочь!</div>
                </div>
                <div class="teacher-block__card teacher-block__card_blue"><img src="img/maria.png" alt=""
                        class="teacher-block__card__photo">
                    <div class="teacher-block__card__name">Мария</div>
                    <div class="teacher-block__card__descr">Специалист по психолии, поможет вам лучше разобраться в себе
                        и окружающих</div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <h2 class="title_min title_white">Отзывы наших выпускников</h2>
            <div class="reviews-block">
                <div class="reviews-block__wrapper">
                    <div class="reviews-block__wrapper__user"><img src="img/student1.png" alt="vitalik"
                            class="reviews-block__wrapper__user__img">
                        <div class="reviews-block__wrapper__user__person">
                            <div class="reviews-block__wrapper__user__name">Виталий</div><img src="icons/Star_icon.svg"
                                alt="star" class="reviews-block__wrapper__user__star">
                        </div>
                    </div>
                    <p class="reviews-block__wrapper__user__text">Господа, высокое качество позиционных исследований не
                        даёт нам иного выбора, кроме определения экономической целесообразности принимаемых решений.
                        Господа, повышение уровня гражданского сознания не оставляет шанса для благоприятных перспектив.
                        Имеется спорная точка зрения, гласящая примерно следующее: тщательные исследования конкурентов
                        формируют глобальную экономическую сеть и при этом — обнародованы. В рамках спецификации
                        современных стандартов, базовые сценарии поведения пользователей преданы
                        социально-демократической анафеме! С учётом сложившейся международной обстановки, перспективное
                        планирование создаёт предпосылки для позиций, занимаемых участниками в отношении поставленных
                        задач.</p>
                </div>
                <div class="reviews-block__wrapper">
                    <div class="reviews-block__wrapper__user"><img src="img/student2.png" alt="vitalik"
                            class="reviews-block__wrapper__user__img">
                        <div class="reviews-block__wrapper__user__person">
                            <div class="reviews-block__wrapper__user__name">Виктория</div><img src="icons/Star_icon.svg"
                                alt="star" class="reviews-block__wrapper__user__star">
                        </div>
                    </div>
                    <p class="reviews-block__wrapper__user__text">Идейные соображения высшего порядка, а также понимание
                        сути ресурсосберегающих технологий в значительной степени обусловливает важность своевременного
                        выполнения сверхзадачи. В целом, конечно, граница обучения кадров позволяет выполнить важные
                        задания по разработке приоретизации разума над эмоциями. Противоположная точка зрения
                        подразумевает, что базовые сценарии поведения пользователей объявлены нарушающими
                        общечеловеческие нормы этики и морали. Но высокотехнологичная концепция общественного требует
                        определения и уточнения дальнейших направлений развития.</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-wrapper-block">
                    <div class="footer-wrapper-block__links">
                        <div class="footer-wrapper-block__links__title">О курсах</div><a href="/index.php"
                            class="footer-wrapper-block__links__link">Курсы</a><br><a href="#course"
                            class="footer-wrapper-block__links__link">Преподаватели</a><br><a href="/index.php"
                            class="footer-wrapper-block__links__link">Отзывы</a>
                    </div>
                    <div class="footer-wrapper-block__links">
                        <div class="footer-wrapper-block__links__title">Компания</div><a href="#about"
                            class="footer-wrapper-block__links__link">О нас</a><br><a href="contacts.php"
                            class="footer-wrapper-block__links__link">Контакты</a>
                    </div>
                    <div class="footer-buttons"><a href="login.php"><button
                                class="buttons__button buttons__button_white">Войти</button></a> <a
                            href="sign.php"><button
                                class="buttons__button buttons__button_black">Регистрация</button></a></div>
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
</body>

</html>