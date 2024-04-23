<?php

if (isseet($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $arms = $_POST['arms'];
    $waist = $_POST['waist'];
    $shoulder = $_POST['shoulder'];
    $wrist = $_POST['wrist'];
    $message = $_POST['message'];

    $mailTo = "kofiktechgh@gmail.com"
    $headers = "From: ".$mailFrom;
    $txt = "Measurements received from: ".$name.".\n".$subject.".\n".$arms.".\n".$waist.".\n".$shoulder.".\n".$wrist.".\n".$message;

    mail($mailTo, $subject, $headers, $txt); 
   // header("Location: index.php?mailSend");
}

?>