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
    $lista_frutas = ['um' => 'Banana', 'dois' => 'Maçã', 'três' => 'Morango', 'quatro' => 'uva'];
    $resposta = in_array('Morango', $lista_frutas);
    echo $resposta . '<br/>';
    $resposta = array_search('Morango', $lista_frutas);
    echo $resposta
    ?>
</body>

</html>