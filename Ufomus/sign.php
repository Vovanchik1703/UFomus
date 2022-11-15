
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
                </a><a href="./aboutUs.php" class="header-wrapper__link">О компании</a> <a href="./contacts.php"
                    class="header-wrapper__link">Контакты</a>
                <div class="buttons"><a href="login.php"><button
                            class="buttons__button buttons__button_white">Войти</button></a> <a href="sign.php"><button
                            class="buttons__button buttons__button_black">Регистрация</button></a></div>
            </div>
        </header>
        <div class="login__background"></div>
        <div class="container">
            <div class="login">
                <div class="login__wrapper"><img src="icons/Regist_icon.svg" alt="login" class="login__img">
                    <div class="login__form">
                        <div class="login__form__title">Регистрация</div>
                        <form action=""><input type="email" placeholder="Email address"> <input type="password"
                                placeholder="Password"> <button class="buttons__login">Продолжить</button></form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if(isset($_POST["register"])){

    if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);
    $query=mysql_query("SELECT * FROM usertbl WHEREusername='".$username."'");
    $numrows=mysql_num_rows($query);
if($numrows==0)
   {
    $sql="INSERT INTO usertbl
  ( email, password)
    VALUES('$email', '$password')";
  $result=mysql_query($sql);
 if($result){
    $message = "Account Successfully Created";
    include ("personalAccount.php");
} else {
 $message = "Failed to insert data information!";
  }
    } else {
    $message = "That username already exists! Please try another one!";
   }
    } else {
    $message = "All fields are required!";
    }
    }
    ?>
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

