<?php

$login = $_POST['Login'];
$senha = $_POST['senha'];

if ($login == "admin" && $senha == "1234") {
    session_start();
    $_SESSION['login'] = "<strong> Seu usuário é: </strong>" . $login . "<br><br>";
    echo $_SESSION['login'];
    echo "Login bem-sucedido!";

} else {
    echo "Login ou senha incorretos.";
}

?>