<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

if ($cidade == "curitiba") {
    echo "Olá $nome, voce mora em $cidade. Bem vindo Curitibano!";
} else {   
echo "Olá $nome, voce mora em $cidade.";
}

?>