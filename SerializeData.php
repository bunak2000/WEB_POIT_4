<?php

if ( $_GET['SerializeData'] == "execute"){

    echo '<div class="AboutField">';
    echo '<p class="LabelTable">Данные для сериализации: </p>';
    file_put_contents('./SerializedData.csv',''); 

    $Chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $Amount = mt_rand(1,10);
    for($i = 0; $i < $Amount; $i++){
        $Flag = mt_rand(1,4);  
        switch($Flag){
            case 1:
                $Data = mt_rand(1,100000);
            break;
            case 2:
                $Data = mt_rand(1,100000) / mt_rand(1,100);
            break;
            case 3:
                $Length = mt_rand(1,30);
                for($j = 0; $j < $Length; $j++){
                    $Data[$j] = mt_rand(1,10000);
                }
            break;
            case 4:
                $Length = mt_rand(1,25);
                $Data = substr(str_shuffle($Chars), 0, $Length);
            break;
            default:
            $Data = "Default";
        }
         echo $Data;
         echo '<br>';

        $SerializedData = serialize($Data);
        $SerializedData = $SerializedData . "|";
        file_put_contents('./SerializedData.csv',$SerializedData,FILE_APPEND); 
    }   
    echo '</div>';  
}