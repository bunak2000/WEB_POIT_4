<?php

$mysqli = new mysqli ('localhost', 'root', 'bsuir', 'Lab5Database');

if ($mysqli->connect_errno) {
    echo("Соединение не удалось:  $mysqli->connect_error");
    exit();
}

$mysqli->set_charset("utf8");

$query = "SELECT * FROM Cities LEFT JOIN Weather on Cities.Id = Weather.CityId ORDER BY CityName;";
$result = $mysqli->query($query);

echo '<div class="TableStructField">';
if ($result->num_rows > 0) {
    while ($TableRow = $result->fetch_assoc()) {
        echo '<p class="LabelText">';
        foreach($TableRow as $key => $value){
            if ($value == ''){ $value = 'No';}
            echo $key . ': ' . $value . '; ';
        }
        echo '</p>';
    }
} else {
    echo "No results";
}
echo '</div>';

$query = "show tables;";
$TablesList = $mysqli->query($query);

if ($TablesList->num_rows > 0) {
    while ($TablesListRow = $TablesList->fetch_assoc()) {
        echo '<div class="TableStructField">';
        echo '<p class="LabelTable">Структура таблицы ' . $TablesListRow["Tables_in_Lab5Database"] . '</p>';

        $query = "Explain " . $TablesListRow["Tables_in_Lab5Database"];
        $TableStruct = $mysqli->query($query);

        if ($TableStruct->num_rows > 0) {
            while ($TablesStructRow = $TableStruct->fetch_assoc()) {
                echo '<p class="LabelText">';
                foreach($TablesStructRow as $key => $value){
                    if ($value == ''){ $value = 'No';}
                    echo $key . ': ' . $value . '; ';
                }
                echo '</p>';
             
            }      
        } else {
            echo "No results";
        }
        echo '</div>';

        echo '<div class="TableStructField">';
        echo '<p class="LabelTable">Данные таблицы ' . $TablesListRow["Tables_in_Lab5Database"] . '</p>';

        $query = "SELECT * FROM " . $TablesListRow["Tables_in_Lab5Database"];
        $TableDataList = $mysqli->query($query);

        if ($TableDataList->num_rows > 0) {
            while ($DataRow = $TableDataList->fetch_assoc()) {
                echo '<p class="LabelText">';
                foreach($DataRow as $key => $value){
                    if ($value == ''){ $value = 'No';}
                    echo $key . ': ' . $value . '; ';
                }  
                echo '</p>';
            }
        } else {
            echo "No results";
        }     
        echo '</div>';

    }      
} else {
    echo "No results";
}