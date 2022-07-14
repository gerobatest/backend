<?php

    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Headers: Content-Type');

    //Reçevoir les données depuis la partie front end
    $json = file_get_contents('php://input'); //il va recuperer l'object
    $_POST = json_decode($json, true); //il va decoder l'object, pour lire

    $nameVal = $_POST ['name'];
    $fNameVal= $_POST ['fName'];
    $emailVal= $_POST ['email'];
    $messageVal= $_POST ['message'];

    $to_email = "haingo.alicia@gmail.com, jtindiana@student.udm.ac.mu";
    $subject = "Message venant de $nameVal $fNameVal : $emailVal";
    $body = "$messageVal ";
    $headers = "From: l.rakotovao@gds-mu.com";
    
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }

?>



