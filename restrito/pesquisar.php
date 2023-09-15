<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pesquisar</title>
  </head>
  <body>

    <?php
    include "conexao.php";
    $pesquisa = $_POST['busca'] ?? '';

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
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
                  <th scope="col">Funções</th>

                </tr>
              </thead>
              <tbody>

              <?php
              while($linha = mysqli_fetch_assoc($dados)){
                $idPessoa = $linha['idPessoa'];
                $nome = $linha['nome'];
                $email = $linha['email'];
                $telefone = $linha['telefone'];
                $nascimento = $linha['nascimento'];
                $nascimento = mostrar_data($nascimento);
                echo "<tr>
                      <th scope='row'>$nome</th>
                      <td>$email</td>
                      <td>$telefone</td>
                      <td>$nascimento</td>
                      <td>
                        <a href='edit.php?id=$idPessoa' class='btn btn-success'>Editar</a>
                        <a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirma'
                        onclick=" .'"' ."pegar_dados($idPessoa, '$nome')".'"' .">Exluir</a>
                      </td>
                      <tr>";
                  }
                ?> 
              </tbody>
            </table>
            <a href="index.php" class="btn btn-info">Voltar</a>
            </div >
        </div>
    </div>
      <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="excluir_script.php" method="POST"> </form>
              <p>Tem certeza que quer excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type="hidden" name="id" id="idPessoa" value="">
                <input type="hidden" name="nome" id="nome_pessoa_1" value="">
                <input type="submit" class="btn btn-danger" value="Sim">
              </form>
            </div>
          </div>
        </div>
      </div>       

      <script type="text/javascript">
        function pegar_dados(id, nome){
          document.getElementById('nome_pessoa').innerHTML = nome;
          document.getElementById('cod_pessoa_1').value = nome; 
          document.getElementById('idPessoa').value = id;
        }
      </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></>
    
  </body>
</html>