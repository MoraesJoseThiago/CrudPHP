<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Pesquisar</title>
  </head>
  <body>

    <?php

    $pesquisa = $_POST['busca'] ?? '';
    include "conexao.php";

    $sql = "SELECT * FROM cadastro WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);

    ?>
    
    <div class="Container">
        <div class="row">
            <div class="col">  
            <h1>Pesquisar</h1>
            <nav class="navbar navbar-light bg-light">
              <form class="form-inline" action="" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
            </nav>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Data de nascimento</th>
                </tr>
              </thead>
              <tbody>
              <?php
              while($linha = mysqli_fetch_assoc($dados)){
                $nome = $linha['nome'];
                $email = $linha['email'];
                $telefone = $linha['telefone'];
                $nascimento = $linha['nascimento'];
                echo "  <tr>
                          <th scope='row'>$nome</th>
                          <td>$email</td>
                          <td>$telefone</td>
                          <td>$nascimento</td>
                        <tr>";
                  }
                ?>


              </tbody>
            </table>

            <a href="index.php" class="btn btn-info">Voltar</a>
            </div >
        </div>
    </div>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>