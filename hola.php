<?php
    if($_POST['edad']>=18){
        echo '<h1> Eres mayor de edad tyury';
    }else{
        echo '<script>alert("No sir")</script>';
        header('Location: condicionales.php');
    }
?>