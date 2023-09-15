<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cadastro";

    if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
        //echo "CONEXÃO BD CORRETO";
    } else{
        echo "Não Conectado";
    }


    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' rolo='alert'>$texto</div>";
    }

    function mostrar_data($data) {
        $d = explode('-', $data);
        $escreve = $d[2] ."/" .$d[1] ."/".$d[0];
        return $escreve;
    }


    function clear($conexao, $texto_puro){
        $texto = mysqli_real_escape_string($conexao, $texto_puro);
        $texto = htmlspecialchars($texto);
        return $texto;
    }
?>