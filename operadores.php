
<?php
    $numero = 10;
    $numero2 = 6.5;
    
    define("clase", "bg-info");

    $resultado = $numero % $numero2;

    echo '<h1 class='. clase. '>' .$resultado. '</h1>';

    /*
     Operadores de asignación

     =
     +=
     -=
     *=
     /=
    
     --
     */

     $number = 10;
     $number2 = 5;

     $number = $number + 7;
     $number += 3;

     echo '<h1 class='. clase. '>' .$number. '</h1>';


    /* Operadores lógicos

        ==
        ===
        !=, <>
        !==
        >
        <
        >=
        <=
    */

    if ($numero === 10) {
        echo "Es identico<br>";
    }else {
        echo "Es diferente <br>";
    }

    $faker = 'true';

    $faker === (true) ? print "ds" : print "Falso/Fake<br>" ;

    /*Operadores lógicos 
    
    and, &&
    or, ||
    xor
    !

    */

    $number4 = 10;

    if ($numero <=10 && $numero <9) {
        echo "Ejecuta<br>";
    }else{
        echo "NOOOOO<br>";
    }

    /* Operadores de Incremento / Decremento:
    ++$x
    $x++
    --$x
    $x--
    */ 

    $numeroP2 = 10;
    // $numeroP2++;

    echo $numeroP2--. '<br>';
    echo $numeroP2 . '<br>';

    /* Operadores de Cadenas:
    
    .
    .=


    */

    $texto = 'Hola hola ';
    $texto .= 'Doroti<br>';

    $resultText = $texto;

    echo $texto;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('carga_bootstrap.php')?>
    <title>Operadores</title>
</head>
<body>
    
</body>
</html>