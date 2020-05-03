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
            <div class="WelcomeBox"> <p> Окно регистрации </p> </div>
            <div class="AuthorisationField">                 
                <table class="AuthorizationTable">
                    <tr>
                        <td> <img src="registration.png" class="UserIcon"> </td>
                    </tr>
                </table>
                <p class="RegistrationLable">Регистрация</p>

                <p class="AuthorisationLabels">Логин:</p>
                <input class="InputLogin">
                <p class="AuthorisationLabels">E-mail:</p>
                <input class="EmailLogin">
                <p class="AuthorisationLabels">Пароль:</p>
                <input type="password" class="InputPassword">
                <p class="AuthorisationLabels">Повторите пароль:</p>
                <input type="password" class="InputPasswordCheck">
                <p></p>
                <button class="LoginButton">Далее</button>
            </div>
        </article>
  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>

    </body>
</html>