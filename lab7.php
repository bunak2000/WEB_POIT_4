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

            <div class="InputField">

            <form type="get">
                <p class="InputLabels">Получатели:</p> 
                <input type="text" class="InputElement" name="InputAddresses" required><br>                            
                <p class="InputLabels">Тема:</p> 
                <input type="text" class="InputElement" name="InputTopic" required><br>
                <p class="InputLabels">Текст сообщения:</p>                
                <textarea rows="10" cols="45" name="MessageBody" class="MessageBody" required></textarea><br>  

                <button type='submit' class="InputButton" name="SendMessage" value="execute">Отправить</button>             
            </form>                                   
            </div>
            
        <?php require_once "./MessageFunctions.php"; ?>

        </article>
  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>
        
    </body>
</html>