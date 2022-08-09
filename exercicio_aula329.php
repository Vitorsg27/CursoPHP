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
    function calcularImposto($salario)
    {
        if ($salario <= 1903.98) {
            echo 'Isento';
        } else if ($salario <= 2826.65) {
            echo $salario * 1.075;
        } else if ($salario <= 3751.05) {
            echo $salario * 1.15;
        } else if ($salario <= 4664.68) {
            echo $salario * 1.225;
        } else {
            echo $salario * 1.275;
        }
    }

    calcularImposto(5000)

    ?>
</body>

</html>