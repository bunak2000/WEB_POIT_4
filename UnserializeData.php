<?php

if ( $_GET['UnserializeData'] == "execute"){
    $FileInformation = file_get_contents('./SerializedData.csv');

    $Data = str_getcsv($FileInformation,"|");

    echo '<div class="AboutField">';
    echo '<p class="LabelTable">Десериализованные данные: </p>';

    foreach($Data as $key => $value){
    echo '<br>';
    echo unserialize($value);
    }

    echo '</div>';
}