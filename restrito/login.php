
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
    <div class="Container">
        <div class="row">
            <div class="col">  
            <h1>Cadastro dos Estudantes para Cibersegurança</h1>
            <form action="cadastro.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome completo:</label>
                    <input type="text" class="form-control" placeholder="Seu nome aqui" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Enderaço de Email:</label>
                    <input type="email" class="form-control" placeholder="Seu email aqui" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="telefone" class="form-control" placeholder="Seu telefone aqui" name="telefone" required>
                </div>  
                <div class="form-group">
                    <label for="nome">Data de nascimento:</label>
                    <input type="date" class="form-control" placeholder="Sua data aqui" name="nascimento" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="button">
                </div>
            </form>
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