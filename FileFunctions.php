<?php
// file_put_contents('./companies.csv', 'fuck');

function FindByName($Data,$InputName){
    $Name = $InputName . ',';
    $Position = strpos($Data,$Name);

    if ($Position > 0) {
        if ($Data[$Position - 1] == ','){
            return $Position;
        }
    }
    return $Position;
}

function ShowCompanyByIndex($Data,$Index){
    $Flag = 0;
    for($i = $Index; $Flag < 4; $i++){
        if ($Data[$i] == ','){
            if ($Flag == 0){
                echo '<p class="FileInformationText">'.'Company  name: '.$Information.'</p>';
            }            
            if ($Flag == 1){
                echo '<p class="FileInformationText">'.'Company adress: '.$Information.'</p>';                
            }
            if ($Flag == 2){
                echo '<p class="FileInformationText">'.'Company telephone: '.$Information.'</p>';                
            }
            if ($Flag == 3){
                echo '<p class="FileInformationText">'.'Company e-mail: '.$Information.'</p>';              
            }
            $Information = '';            
            $Flag++;
            continue;
        }
        if ($Flag == 0){
            $Information = $Information . $Data[$i];
        }
        if ($Flag == 1){
            $Information = $Information . $Data[$i];
        }
        if ($Flag == 2){
            $Information = $Information . $Data[$i];
        }
        if ($Flag == 3){
            $Information = $Information . $Data[$i];
        }
    }
}

if ( $_GET['FindButton'] == "execute"){

    $Data = ','.file_get_contents('./companies.csv');
    $Index = FindByName($Data, $_GET['InputName']);

    if ($Index != FALSE){
        echo '<div class="FileInformationField">';
        echo '<p class="InfoLabel">Company '.$_GET['InputName'].'</p>';
        ShowCompanyByIndex($Data,$Index);
        echo '</div>';
    }
    else{
        echo '<div class="FileInformationField">';
        echo '<p class="InfoLabel">Company '.$_GET['InputName'].'</p>';
        echo '<p class="FileInformationText">Not found</p>';
        echo '</div>';
    }
}

if ( $_GET['ShowFileButton'] == "execute"){
    $FileInformation = file_get_contents('./companies.csv');

    echo '<div class="FileInformationField">';
    $Flag = 4;
    for($i = 0; $i < strlen($FileInformation); $i++){
        if($Flag == 4){
            $Flag = 0;
            echo '<p class="InfoLabel">Company</p>';            
            ShowCompanyByIndex($FileInformation,$i);
        }        
        if ($FileInformation[$i] == ','){
            $Flag++;
        }
    }
    if (strlen($FileInformation) == 0){
        echo '<p class="InfoLabel">File is empty</p>';           
    }
    echo '</div>';
}

if ( $_GET['AddCompanyButton'] == "execute"){
    $FileInformation = file_get_contents('./companies.csv');
    $IsExist = FindByName($FileInformation,$_GET['InputName']);

    $Name = trim($_GET['InputName']);

    echo '<div class="FileInformationField">';
    if ($Name != ''){
        if ($IsExist == FALSE){
        $NewCompany = $_GET['InputName'] . ',' . $_GET['InputAddress'] . ',' . $_GET['InputTelephone'] . ',' . $_GET['InputEmail']. ',';
        file_put_contents('./companies.csv',$NewCompany,FILE_APPEND);  
        echo '<p class="InfoLabel">Company '.$_GET['InputName'].' added </p>';        
        }
        else{
            echo '<p class="InfoLabel">Company '.$_GET['InputName'].' already exists </p>';           
        }        
    }
    else{
        echo '<p class="InfoLabel">Invalid company name</p>';          
    }
    echo '</div>';
}