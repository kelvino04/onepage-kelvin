<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
if(isset($_POST['reden'])){
    $reden = $_POST['reden'];
}
else{
    $reden = 0;
}
$message = $_POST['message'];

file_put_contents('contact.txt', $name . ", " . $email . ", " . $tel . ", " . $reden . ", " . $message, FILE_APPEND);

echo $name . ", " . $email . ", " . $tel . ", " . $reden . ", " . $message;

$msg = "uw contact is ontvangen";

header("Location: ../contact.php?msg=$msg");



?>