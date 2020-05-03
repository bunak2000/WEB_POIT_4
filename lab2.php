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

            <form type="get" class="AboutField">
                <input type="number" class="InputAmount" name="InputAmount"><br>
                <input type="radio" class="InputColor" name="ColorRadioButton" value="Red" checked>Red<br>
                <input type="radio" class="InputColor" name="ColorRadioButton" value="Green">Green<br>
                <input type="radio" class="InputColor" name="ColorRadioButton" value="Blue">Blue<br>          
                <button type='submit' class="InputButton">Submit</button>
                   
            </form>

            <div class="TableField">
            <?php require_once "./TableFunction.php"; ?>                   
            </div>
 
        </article>
  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>
        
    </body>
</html>