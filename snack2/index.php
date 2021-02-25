<?php 
    $nome = $_GET['name'];
    $email = $_GET['mail'];
    $eta = $_GET['age'];


    if(strlen($nome) > 3 && strpos($email, ".") && strpos($email, "@") && is_numeric($eta)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>