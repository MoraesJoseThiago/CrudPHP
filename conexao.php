<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cadastro";

    if($conn = mysqli_connect($server, $user, $pass, $bd)) {
        //echo "Eu gosto do lucas";
    } else{
        echo "Não Conectado";
    }


    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' rolo='alert'>$texto</div>";
    }
?>