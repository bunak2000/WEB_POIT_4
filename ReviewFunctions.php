<?php
function SaveReviewToFile($Review, $Name){
    $Data = $Name . '|' . $Review . '|';
    file_put_contents('./Reviews.csv',$Data,FILE_APPEND);  
}
function LoadReviewsFromFile(){
    $Data = file_get_contents('./Reviews.csv');
    if (trim($Data) == ''){
        return 0;
    }
    $Reviews = str_getcsv($Data,'|');
    $Amount = count($Reviews);
    for($i = 0;$i < $Amount - 1;$i = $i + 2){
        echo '<div class="ReviewField">';
        echo '<p class="ReviewLabel">Отзыв</p>';
        echo '<p>'.$Reviews[$i] . ', ' . $Reviews[$i+1] . '</p>';
        echo '</div>';
    }
}
function CheckReview($Reviews){
    $Pattern = '/(https?:\/\/)(?!www\.bsuir\.by[\s\S]?)(?!bsuir\.by[\s\S]?)([\w]+[.])?([\w]+[.])([a-z]{2,}[\/]?)([\/][^ ]+)?/';

    $Replacement = '#Внешние ссылки запрещены#';
    $String = preg_replace($Pattern,$Replacement,$Reviews);
    return $String;
}

if ($_GET['AddReview'] == 'execute'){
    $Name = $_GET['InputName'];
    $Review = $_GET['InputReview'];
    $Name = trim($Name);
    $Review = trim($Review);
    if ( ($Review != '') && ($Name != '') ){
        $Review = CheckReview($Review);
        SaveReviewToFile($Review,$Name);
    }
}
LoadReviewsFromFile();