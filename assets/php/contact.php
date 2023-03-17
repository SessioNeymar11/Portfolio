<?php
$to = "alessiodedonato11@gmail.com";
$subject = "Nuovo messaggio dal form di contatto";
$message = "Nome: " . $name . "\n" . "Email: " . $email . "\n" . "Messaggio: " . $message;
$headers = "From: " . $email;
$nome = $_POST['nome'];
mail($to, $subject, $message, $headers);


?>