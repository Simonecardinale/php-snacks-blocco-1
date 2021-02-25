<?php 
    $nome = $_GET['name'];
    $email = $_GET['mail'];
    $eta = $_GET['age'];
    $ciao = "ciao@tutti.com";
    $checkAfterAt = preg_split("/[@\s.]/", $email);
    $checkarray = [
        [
            $checkname = true,
            "errore" => "Attenzione: nome errato!"
        ],
        [
            $checkemail = true,
            "errore" => "Attenzione: email errata!"
        ],
        [
            $checkage = true,
            "errore" => "Attenzione: età errata!"
        ],
    ];


    if(strlen($nome) > 3 && strpos($email, ".") && strpos($email, "@") && is_numeric($eta) && strlen($checkAfterAt[1]) > 3) {
        echo "Accesso riuscito";
    } 
    if (strlen($nome) <= 3) {
        $checkarray[0][0] = false;
    } 
    if (!strpos($email, ".") || !strpos($email, "@") || strlen($checkAfterAt[1]) < 3) {
        $checkarray[1][0] = false;
    } 
    if (!is_numeric($eta)) {
        $checkarray[2][0] = false;
    };

    for ($i = 0; $i < count($checkarray); $i++) {
        if($checkarray[$i][0] == false) {
            echo $checkarray[$i]["errore"];
        }
    }
    

?>