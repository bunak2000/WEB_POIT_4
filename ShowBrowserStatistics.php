<?php

echo '<div class="AboutField">';
$Statistics = file_get_contents('./Statistics.csv');
$Statistics = unserialize($Statistics);
arsort($Statistics);
foreach($Statistics as $key => $value){
    echo $key . ": " . $value . '<br>';
}
echo '</div>';