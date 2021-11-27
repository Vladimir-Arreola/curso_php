<?php
$herramientas = array('Prezi', 'Google Slides', 'Canva');

$tecnicas = array('Lluvia de ideas', 'Panel de Discusión');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Herramientas de Diseño</title>
</head>

<body>
    <div class="container mt-2">

        <h1 class="d-flex justify-content-center mb-0">Herramientas y técnicas para el desarrollo de presentaciones</h1>
        <h4 class="d-flex justify-content-center">por</h4>
        <h2 class="d-flex justify-content-center">Vladimir Arreola</h2>

        <table class="table mt-3">
            <thead class="table-primary">
                <th>Herramienta</th>
                <th>Técnica</th>
                <th>Material(es)</th>
                <th>Paso para la implementación / desarrollo</th>
            </thead>
            <tbody>
                    <!-- <?php
                            foreach ($herramientas as $herramienta) {
                                echo
                                //Crea una fila, una columna para la herramienta, luego los materiales 
                                '<tr> 
                                <td>' . $herramienta . '</td> 
                                <td></td>
                                <td>Dispositivo con conexión a Internet</td>
                                </tr>';
                            }
                            ?> -->

                <tr> <!-- Prezi -->
                    <td><?php echo $herramientas[0] ?></td>
                    <td>Visual</td>
                    <td>Tener un dispositivo con conexión a internet, tener teclado y mouse</td>
                    <td>Hay que registrarse en esta página para poder, una vez teniendo cuenta, podemos elegir entre tres planes (Basic, Plus y Premium). Una vez teniendo una cuenta, podemos invitar a personas de nuestro equipo para colaborar con nosotros</td>
                </tr>

                <tr>    
                    <td><?php echo $herramientas[1] ?></td>
                    <td>Visual</td>
                    <td>Tener un dispositivo con conexión a internet, tener teclado y mouse</td>
                    <td>Para esta página basta con tener una cuenta de Google a nuestra disposición, podemos invitar a nuestros compañeros a colaborar con sus correos de google. Todos los integrantes pueden editar en tiempo real.</td>
                </tr>
               
                <tr>
                    <td><?php echo $herramientas[2] ?></td>
                    <td>Visual</td>
                    <td>Tener un dispositivo con conexión a internet, tener teclado y mouse</td>
                    <td>Hay que crear una cuenta, tenemos la opción gratis y premium, en la cual contamos con varias ventajas, como muchas plantillas gratis e imágenes. Debemos registrarnos e iniciar un nuevo proyecto, en el cual, podemos invitar a nuestros colaboradores.</td>
                </tr>

                <tr>
                    <td></td>
                    <td><?php echo $tecnicas[0] ?></td>
                    <td>Pizarra</td>
                    <td>Los integrantes de un grupo no muy grande, deben de comunicar sus ideas, para posteriormente combinarlos y aprovechar lo mejor de cada uno. Debe desarrollarse entre un marco temporal de 60 a 90 minutos.</td>
                </tr>

                <tr>
                <td></td>
                    <td><?php echo $tecnicas[1] ?></td>
                    <td>
                        <ul>
                            <li>Microfono(opcional)</li>
                            <li>Estrado(opcional)</li>
                        </ul> 
                    </td>
                    <td>Pueden organizarse de diversas maneras, algunos de cara al público general, y otros como parte de eventos de una comunidad técnica o especializada, tales como congresos o reuniones de gremios.</td>
                </tr>

                <!-- <?php foreach ($tecnicas as $tecnica) {
                    echo
                    '<tr>
                    <td></td>
                    <td>' . $tecnica . '</td>
                    </tr>';
                } ?> -->

            </tbody>
        </table>
    </div>
</body>

</html>