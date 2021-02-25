<?php 
    $matches = [
        [
            "casa" => "Los Angeles Lakers",
            "ospite" => "Golden State Warriors",
            "punteggioCasa" => 104, 
            "punteggioOspite" => 60,
        ],
        [
            "casa" => "Cleveland Cavaliers",
            "ospite" => "Chicago Bulls",
            "punteggioCasa" => 85,
            "punteggioOspite" => 36,
        ],
        [
            "casa" => "Miami Heat",
            "ospite" => "Philadelphia 76ers",
            "punteggioCasa" => 125,
            "punteggioOspite" => 84,
        ],
        [
            "casa" => "Milwaukee Bucks",
            "ospite" => "San Antonio Spurs",
            "punteggioCasa" => 89,
            "punteggioOspite" => 80,
        ],
    ];
?>

<?php 
    for ($i = 0; $i < count($matches); $i++) { 
    $casa = $matches[$i]['casa'];  
    $ospite =  $matches[$i]['ospite'];
    $punteggioCasa = $matches[$i]['punteggioCasa'];
    $punteggioOspite = $matches[$i]['punteggioOspite'];
?>

<h2><?php echo $casa?> - <?php echo $ospite?>| <?php echo $punteggioCasa?> - <?php echo $punteggioOspite?></h2>

<?php }?>