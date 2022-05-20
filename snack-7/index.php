<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$alunni = [
    [
      'nome' => 'Peter',
      'cognome' => 'Griffin',
      'voti' => [8,6,4,5,7,3]
    ],
    [
      'nome' => 'Homer',
      'cognome' =>'Simpson',
      'voti' => [8,7,7,7,7,3]
    ],
    [
      'nome' => 'Seymour',
      'cognome' => 'Skinner',
      'voti' => [5,6,1,5,10,3]
    ],
    
];


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
    <div>
<?php
foreach($alunni as $alunno){
    $somma = 0;
    foreach ($alunno['voti'] as $voto) {
        $somma = $somma + $voto;
        
    }
    $media = $somma / count($alunno['voti']);
    echo '<div>' . $alunno['nome'] . ' ' . $alunno['cognome'] . ' ' . $media . '</div>';
} 
?>
    </div>
</body>
</html>