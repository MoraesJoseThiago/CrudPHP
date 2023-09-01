<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class=row>
            <?php
                include "conexao.php";

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $nascimento = $_POST['nascimento'];

                $sql = "INSERT INTO `cadastro`(`Nome`, `Email`, `Telefone`, `Nascimento`) VALUES ('$nome','$email','$telefone','$nascimento')";
          
               if (mysqli_query($conn, $sql)){
                    mensagem("$nome Sucesso", 'success');
               } else {
                    mensagem("$nome Error", 'danger');
              } 
          ?>
            <a href="http://localhost/TrabalhoPhp/">Voltar</a> 
        </div>
    </div>

    

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>