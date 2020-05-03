<?php
    $user_input = $_GET['InputAmount'];

	$red = 0;
	$green = 0;
	$blue = 0;
    $typeofcolor = 0;

    if ( $_GET['ColorRadioButton'] == "Red") {
        $typeofcolor = 1;
    }
    if ( $_GET['ColorRadioButton'] == "Green") {
    $typeofcolor = 2;
    }
    if ( $_GET['ColorRadioButton'] == "Blue") {
    $typeofcolor = 3;
    }

    echo '<table>';
    for($i = 1; $i <= $user_input; $i++) {      
    if ($typeofcolor == 1) {
        $red = $red + 3;
        }
        if ($typeofcolor == 2) {
        $green = $green + 3;
        }               
        if ($typeofcolor == 3) {
        $blue = $blue + 3;
        }
        if ($i % 5 == 0 ) {
		    $str = '<tr class="TableRowGreen"><td class="TableCell">  </td><tr>';
            echo $str;
        }
        else {
		    $str = '<tr style = "background-color:'.'rgb('.$red.','.$green.','.$blue.'); "><td class="TableCell">  </td><tr>';
            echo $str;
            }
    }
    echo '</table>';
?>