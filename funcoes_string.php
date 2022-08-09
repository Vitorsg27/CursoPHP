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
    $text = 'Curso Completo de PHP';

    echo $text . '<br/>';

    //string to lower
    echo strtolower($text) . '<br/>';

    //string to upper
    echo strtoupper($text) . '<br/>';

    //upper case first
    echo ucfirst($text) . '<br/>';

    //string lenght
    echo strlen($text) . '<br/>';

    //string replace
    echo str_replace('PHP', 'JavaScript', $text) . '<br/>';
    echo str_replace('.', ',', '20.20') . '<br/>';

    //string substr
    echo substr($text, 1,50);
    echo '.';

    ?>
</body>

</html>