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
            <div class="WelcomeBox"> <p>Погода в городах мира</p> </div>

            <div class="IndexWeatherHeader">
                <table class="WeatherTable" >
                    <td class="WeatherTableRow"> <p>Город</p> </td>
                    <td class="WeatherTableRow"> <p>Погода</p></td>
                    <td class="WeatherTableRow"> 
                        <p>Температура</p>
                    </td>
                    <td class="WeatherTableRow">
                        <p>Скорость ветра</p>
                    </td>                  
                    <td><p>Подробное описание</p></td>
                </table>                                         
            </div>

            <div class="IndexWeather">
                <table class="WeatherTable" >
                    <td class="WeatherTableRow"> <p>Москва</p> </td>
                    <td class="WeatherTableRow"> <img src="cloudy.png"> </td>
                    <td class="WeatherTableRow"> 
                        <p class="TemperatureDay">День: + 15-16 °C</p>                        
                        <p class="TemperatureNight">Ночь: + 10-11 °C</p>
                    </td>
                    <td class="WeatherTableRow">
                        <p class="wind">Северный</p>
                        <p class="WindSpeed">3-10 м/c</p>
                    </td>                  
                    <td><p> Преобладание облачной погоды. Временами осадки (дождь, возможен мокрый снег)(вероятность осадков 70-80 %). Влажность около 11%</p></td>
                </table>                                         
            </div>

            <div class="IndexWeather">
                <table class="WeatherTable" >
                    <td class="WeatherTableRow"> <p>Минск</p> </td>
                    <td class="WeatherTableRow"> <img src="rain.png"> </td>
                    <td class="WeatherTableRow"> 
                        <p class="TemperatureDay">День: + 13-14 °C</p>
                        <p class="TemperatureNight">Ночь: + 11-12 °C</p>
                    </td>
                    <td class="WeatherTableRow">
                        <p class="wind">Южный</p>
                        <p class="WindSpeed">4-5 м/c</p>
                    </td>                  
                    <td><p> Преобладание дождливой погоды. Влажность около 21%</p></td>
                </table>                                         
            </div>

            <div class="IndexWeather">
                <table class="WeatherTable" >
                    <td class="WeatherTableRow"> <p>Киев</p> </td>
                    <td class="WeatherTableRow"> <img src="tornado.png"> </td>
                    <td class="WeatherTableRow"> 
                        <p class="TemperatureDay">День: + 10-13 °C</p>
                        <p class="TemperatureNight">Ночь: + 8-10 °C</p>
                    </td>
                    <td class="WeatherTableRow">
                        <p class="wind">Южный</p>
                        <p class="WindSpeed">35-50 м/c</p>
                    </td>                  
                    <td><p> Преобладание пасмурной погоды. Возможен торнадо. Влажность около 49%</p></td>
                </table>                                         
            </div>

        </article>
  
        <news class="pageNews"></news>

        <ads class="pageAds"></ads>

        <footer class="pageFooter"> <p> BSUIR, 2020. All rights reserved </p></footer>

    </body>
</html>