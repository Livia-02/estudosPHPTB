<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container mt-5 d-flex login justify-content-center align-items-center">
        <div class="card w-100" style="max-width: 400px;">
            <div class="card-body fundoroxo">
            <header class="text-center text-white p-4 ">
                <div class="text-center"><h2>Login do Sistema</h2></div>
            </header>
            <form action="Resposta.php" method="POST">
                    <div class="form-group">
                    <label for="username">Nome de Usuário</label>
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Seu nome de usuário">
                    </div>
                    <div class="form-group mt-3">
                    <label for="password">Senha</label>
            <input type="password" class="form-control"name="senha" id="senha"  placeholder="Senha">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-outline-light w-100">Acessar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">Essa página é reservada.</small>
            </div>
        </div>
        <?php
    if (isset($_GET['return'])) {
      echo '
      <div class="row justify-content-end fixed-bottom">
        <div class="col-12 col-sm-6 col-md-4 ml-2 mr-2">
          <div class="alert alert-warning p-3">
            <h4 class="text-center">'
              . $_GET['return'] .
            '</h4>
          </div>
        </div>
      </div>
      ';
    }
    ?>
    </div>
</body>
</html>
