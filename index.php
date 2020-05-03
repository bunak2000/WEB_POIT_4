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
            <div class="welcome_box"> <p>Добро пожаловать на сайт Pogoda.бай!</p> </div>

            <div class="WeatherTableSpace">
                <table class="WeatherTable">
                    <tr>
                        <td class="WeatherTableCell">
                            <img src="cloudy.png" class="WeatherTableImage">
                            <p class="City">Москва</p>
                            <p class="TemperatureDay"> День: + 15-16 °C</p>
                            <p class="TemperatureNight"> Ночь: + 10-11 °C</p>
                            <p class="Humidity">Влажность: 11%</p>                           
                        </td>
                        <td class="WeatherTableCell">
                            <img src="rain.png" class="WeatherTableImage">
                            <p class="City">Минск</p>
                            <p class="TemperatureDay"> День: + 13-14 °C</p>
                            <p class="TemperatureNight"> Ночь: + 11-12 °C</p>
                            <p class="Humidity">Влажность: 21%</p>                           
                        </td>
                        <td class="WeatherTableCell">
                            <img src="tornado.png" class="WeatherTableImage">
                            <p class="City">Киев</p>
                            <p class="TemperatureDay"> День: + 10-13 °C</p>
                            <p class="TemperatureNight"> Ночь: + 8-10 °C</p>
                            <p class="Humidity">Влажность: 49%</p>                           
                        </td>
                        <td class="WeatherTableCell">
                            <img src="sunny.png" class="WeatherTableImage">
                            <p class="City">Берлин</p>
                            <p class="TemperatureDay"> День: + 18-20 °C</p>
                            <p class="TemperatureNight"> Ночь: + 11-14 °C</p>
                            <p class="Humidity">Влажность: 31%</p>                           
                        </td>
                        <td class="WeatherTableCell">
                            <img src="rain.png" class="WeatherTableImage">
                            <p class="City">Варшава</p>
                            <p class="TemperatureDay"> День: + 13-14 °C</p>
                            <p class="TemperatureNight"> Ночь: + 10-11 °C</p>
                            <p class="Humidity">Влажность: 20%</p>                           
                        </td> 
                    </tr>               
                    <tr>
                        <td class="WeatherTableCell">
                            <img src="cloudy.png" class="WeatherTableImage">
                            <p class="City">Стамбул</p>
                            <p class="TemperatureDay"> День: + 20-23 °C</p>
                            <p class="TemperatureNight"> Ночь: + 18-20 °C</p>
                            <p class="Humidity">Влажность: 89%</p>                           
                        </td> 
                        <td class="WeatherTableCell">
                            <img src="sunny.png" class="WeatherTableImage">
                            <p class="City">Рим</p>
                            <p class="TemperatureDay"> День: + 22-25 °C</p>
                            <p class="TemperatureNight"> Ночь: + 18-20 °C</p>
                            <p class="Humidity">Влажность: 77%</p>                           
                        </td> 
                        <td class="WeatherTableCell">
                            <img src="sunny.png" class="WeatherTableImage">
                            <p class="City">Мадрид</p>
                            <p class="TemperatureDay"> День: + 25-26 °C</p>
                            <p class="TemperatureNight"> Ночь: + 20-22 °C</p>
                            <p class="Humidity">Влажность: 50%</p>                           
                        </td> 
                        <td class="WeatherTableCell">
                            <img src="snow.png" class="WeatherTableImage">
                            <p class="City">Вашингтон</p>
                            <p class="TemperatureDay"> День: - 16-18 °C</p>
                            <p class="TemperatureNight"> Ночь: - 20-22 °C</p>
                            <p class="Humidity">Влажность: 53%</p>                           
                        </td> 
                        <td class="WeatherTableCell">
                            <img src="sunny.png" class="WeatherTableImage">
                            <p class="City">Лондон</p>
                            <p class="TemperatureDay"> День: + 11-14 °C</p>
                            <p class="TemperatureNight"> Ночь: + 7-10 °C</p>
                            <p class="Humidity">Влажность: 90%</p>                           
                        </td> 
                    </tr>
                </table>
            </div>
        </article>
  
        <news class="pageNews">
            <div class="NewsBoxInvisible"></div>  
            <div class="NewsBox">
                <table class="NewsTable">
                    <tr> <td> <p class="NewsArticle">В Минске потепление!</p> </td> </tr>
                    <tr> <td> <p>Вследствие крупного пожара в Минске стало теплее. По неподтвержденным источникам стало известно, что источником возгарания стал студент БГУИР, у которого не приняли лабу.</p> </td> </tr>
                </table> 
            </div>

            <div class="NewsBox">
                <table class="NewsTable">
                    <tr> <td> <p class="NewsArticle">В Москве пожар!</p> </td>  </tr>
                    <tr> <td> <p>Ночью 14 октября, в кремль ударила молния и он загорелся! Мобилизованы все пожарные части. Однако прогресса пока не наблюдается</p> </td> </tr>
                </table> 
            </div>     
        </news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>

    </body>
</html>