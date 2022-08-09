<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
    $lista_frutas = [
        'a' => 'Banana', 
        'b' => 'Maçã', 
        'c' => 'Morango', 
        'd' => 'Uva', 
        'e' => 'Abacate'
    ];
    $lista_frutas['f'] = 'Abacaxi';
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br/>';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    ?>
</body>

</html>