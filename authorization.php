<html>
    <head>
        <title>Pogoda.бай</title>
        <?php require_once "./MakeCss.php"; ?>
    </head>
    <body link="#000000" vlink="#000000" alink="#000000">
    
        <header class="pageHeader unallocatable">
        <?php require_once "./MakeLinks.php"; ?>
        </header>

        <article class="pageArticle">
            <div class="WelcomeBox"> <p>Авторизация</p> </div>
            <div class="AuthorisationField">          
                <table class="AuthorizationTable">
                    <tr>
                        <td><img src="registration.png" class="UserIcon" ></td>
                    </tr>
                    <tr><td class="authorize"> <p>Вход</p></td></tr>
                </table>
                <p class="AuthorisationLabels">Логин:</p>
                <input class="InputLogin">
                <p class="AuthorisationLabels">Пароль:</p>
                <input type="password" class="InputPassword">
                <p></p>
                <button class="LoginButton">Далее</button>                
                <a href="registration.php" class="RegistrationLink">Еще нет аккаунта? Регистрируйся!</a>
            </div>
        </article>
  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>

    </body>
</html>