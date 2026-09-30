<?php

$primeiro_numero = (int)$_POST['primeiro'];
$segundo_numero = (int)$_POST['segundo'];

$soma = $primeiro_numero + $segundo_numero;

print("<strong> A soma é : </strong>" . $soma . "<br><br>");

var_dump($_POST);

?>