<html>
    <head>
        <title>Pogoda.бай</title>
        <!-- <link rel="stylesheet" href="about.css"> -->
        <?php require_once "./MakeCss.php"; ?>
    </head>
    <body link="#000000" vlink="#000000" alink="#000000">

    
        <header class="pageHeader unallocatable">
        <?php require_once "./MakeLinks.php"; ?>
        </header>

        <article class="pageArticle">
            <div class="WelcomeBox"> <p>О сайте</p> </div>

            <div class="AboutField">
            <form type="get">
                <button type='submit' class="InputButtonCheckFile" name="SerializeData" value="execute">SerializeData</button>
                <button type='submit' class="InputButtonCheckFile" name="UnserializeData" value="execute">UnserializeData</button>                  
            </form>  
            </div>
            
            <?php require_once "./SerializeData.php"; ?>
            
            <?php require_once "./UnserializeData.php"; ?>            
            
        </article>


  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>
        
    </body>
</html>