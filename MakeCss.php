<?php

$PagePath = $_SERVER["REQUEST_URI"];
for($i = 0; $i < strlen($PagePath); $i++){
    if (($PagePath[$i] == '.') && ($PagePath[$i+1] == 'p') && ($PagePath[$i+2] == 'h') && ($PagePath[$i+3] == 'p') ) {
        $PagePath = substr($PagePath, 0, $i);   
    }
}
$PagePath = substr($PagePath, 1, strlen($PagePath) - 1);
echo "<link rel=\"stylesheet\" type=\"text/css\"  href=\"$PagePath.css\"/>";