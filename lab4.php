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
            <div class="WelcomeBox"> <p>Отзывы</p> </div>

            <?php require_once "./ReviewFunctions.php"; ?>           

            <div class="InputField">
            <form type="get">
                <p class="InputLabels">Имя:</p> 
                <input type="text" class="InputElement" name="InputName" required><br>                            
                <p class="InputLabels">Отзыв:</p>                  
                <input type="text" class="InputReview" name="InputReview" required><br>      
             
                <button type='submit' class="InputButton" name="AddReview" value="execute">Leave review</button>           
            </form>
            </div>

        </article>
  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>
        
    </body>
</html>