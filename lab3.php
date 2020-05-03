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
                <p class="InputLabels">Название компании:</p> 
                <input type="text" class="InputElement" name="InputName" required><br>                            
                <p class="InputLabels">Адрес компании:</p> 
                <input type="text" class="InputElement" name="InputAddress"><br>
                <p class="InputLabels">Телефон компании:</p>
                <input type="text" class="InputElement" name="InputTelephone"><br>
                <p class="InputLabels">E-mail компании:</p>                  
                <input type="email" class="InputElement" name="InputEmail"><br>      
                <button type='submit' class="InputButton" name="AddCompanyButton" value="execute">Add Company</button>
                <button type='submit' class="InputButton" name="FindButton" value="execute">Find</button>                
            </form>
            <form type="get">
                <button type='submit' class="InputButtonCheckFile" name="ShowFileButton" value="execute">Check File</button>                
            </form>                                      
            </div>
            
        <?php require_once "./FileFunctions.php"; ?>

        </article>
  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>
        
    </body>
</html>