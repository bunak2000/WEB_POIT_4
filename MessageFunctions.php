<?php

if ( $_GET['SendMessage'] == "execute"){

    require './phpMailer/PHPMailerAutoload.php';
    require './phpMailer/class.smtp.php';
    require './phpMailer/class.phpmailer.php';

    $Message = new PHPMailer();

    $MessageBody = $_GET['MessageBody'];
    $Emails = $_GET['InputAddresses'];
    $Topic = $_GET['InputTopic'];
    $EmailSender = 'Enter your e-mail';
    $Password = 'Enter your e-mail password';

    $EmailsMas = str_getcsv($Emails,';');

    foreach($EmailsMas as $key => $EmailForSend){
        echo $EmailForSend;
    }

    $Message->CharSet = 'UTF-8';
    $Message->isSMTP();
    $Message->Host = "smtp.gmail.com";
    $Message->SMTPAuth = true;
    $Message->Username = $EmailSender;
    $Message->Password = $Password;
    $Message->Port = 465;
    $Message->SMTPSecure = "ssl";

    $Message->isHTML(true);
    $Message->setFrom($EmailSender, 'Pogoda.бай');
    foreach($EmailsMas as $key => $EmailForSend){
        $Message->addAddress($EmailForSend);
    }  
    $Message->Subject = $Topic;
    $Message->Body = $MessageBody;

    $Message->send();

    $Message->clearAddresses();
}