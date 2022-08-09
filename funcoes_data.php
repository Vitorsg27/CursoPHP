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
    echo date('d/m/Y H:i');
    echo '<br/>';
    echo date_default_timezone_get();
    date_default_timezone_set('America/Sao_Paulo');
    echo '<br/>';
    echo date('d/m/Y H:i');
    echo '<br/>';
    echo date_default_timezone_get();
    echo '<br/>';
    echo '<br/>';


    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    //timestamp 01/01/1970 -- 2018-04-24 (js - milissegundos / php - segundos)

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br/>';
    echo $data_final . ' - ' . $time_final;

    $diferenca_times = $time_final - $time_inicial;
    echo '<br/>';
    echo $diferenca_times;
    $segundos_existem_dia = 24 * 60 * 60;
    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
    echo '<br/>';
    echo $diferenca_de_dias_entre_as_datas;

    ?>
</body>

</html>