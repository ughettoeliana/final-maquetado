<?php

$name = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$motive = isset($_POST['motive']);
$addressee = "eliana.ughetto@davinci.edu.ar";
$body = "
<html>
  <body>
    <h1>Mensaje desde la web de Bs.As turismo</h1>
    <p>
    Contacto: $name $lastName <br>
    Mensaje:  $message <br>
    Motivo: $motive
    </p>
  </body>
</html> ";


$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "FROM: $name <$email>\r\n";

mail($addressee, $subject, $body, $headers);
header("location: gracias.html");
