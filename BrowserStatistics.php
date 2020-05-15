<?php
$OldStatistics = file_get_contents('./Statistics.csv');
$OldStatistics = unserialize($OldStatistics);

$Ips = file_get_contents('./Ips.csv');
$Ips = str_getcsv($Ips,';');

if (array_search($_SERVER['REMOTE_ADDR'],$Ips) === false){
    $UserBrowser = $_SERVER["HTTP_USER_AGENT"];
    if (strpos($UserBrowser, "Firefox") !== false) $Browser = "Firefox";
    elseif (strpos($UserBrowser, "Opera") !== false) $Browser = "Opera";
    elseif (strpos($UserBrowser, "Chrome") !== false) $Browser = "Chrome";
    elseif (strpos($UserBrowser, "MSIE") !== false) $Browser = "Internet Explorer";
    elseif (strpos($UserBrowser, "Safari") !== false) $Browser = "Safari";
    else $Browser = "Unknown browser";
    $Ip = $_SERVER['REMOTE_ADDR'] . ';';

    $OldStatistics[$Browser]++;

    $Statistics = serialize($OldStatistics);

    file_put_contents('./Ips.csv', $Ip, FILE_APPEND);
    file_put_contents('./Statistics.csv', $Statistics);         
}