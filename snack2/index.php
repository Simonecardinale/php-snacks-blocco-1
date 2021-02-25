<?php 
    $nome = $_GET['name'];
    $email = $_GET['mail'];
    $eta = $_GET['age'];
    $ciao = "ciao@tutti.com";
    $checkAfterAt = preg_split("/[@\s.]/", $email);

    if(strlen($nome) > 3 && strpos($email, ".") && strpos($email, "@") && is_numeric($eta) && strlen($checkAfterAt[1]) > 3) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>