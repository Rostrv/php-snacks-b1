<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        'home' => 'LA lakers',
        'visitors' => 'Miami heat',
        'homepoints' => '85',
        'visitorspoints' => '74'
    ],

    [
        'home' => 'boston celtics',
        'visitors' => 'milwaukee bucks',
        'homepoints' => '90',
        'visitorspoints' => '74'
    ],

    [
        'home' => 'cleveland cavaliers',
        'visitors' => 'chicago bulls',
        'homepoints' => '82',
        'visitorspoints' => '82'
    ],
];

var_dump($partite);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>
        <?php
                for ($i = 0; $i < count($partite); $i++) {
                    echo $partite[$i]['home']. "-" .$partite[$i]['visitors']." ", "|", " ";
                    echo $partite[$i]['homepoints']."-";
                    echo $partite[$i]['visitorspoints']. '<br>';
                }
        ?>
    </p>


</body>

</html>