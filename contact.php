<?php
if($_SERVER["REQUEST_METHOOD"] =="POST"){
    $name =
    htmlspecialchars($_POST['name']);
    $email =
    htmlspecialchars($_POST['email']);
    $message =
    htmlspecialchars($_POST['message']);
    echo "Thank you' $name! We have received your message:<br>";
    echo nl2br($message);
    echo"<br>We will get back to you at $email.";
}
?>