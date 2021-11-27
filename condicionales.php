<?php

// if(){
//     // Instrucciones
// }

$edad = 16;

if ($edad > 17) {
    echo '<h1> Bienvenido </h1>';
}else{
    echo '<h1>Eres menor de edad</h1>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Condicionales</title>
</head>

<body>
    <div class="container">
        <form action="hola.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" id="exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="js/bootstrap.js"></script>
</body>

</html>