<?php
if($_POST['usuario']  == 'admin' && $_POST['senha'] == 'senha'){
  session_start();
  $_SESSION['usuario'] = $_POST['usuario'];
}else{
  // echo"<script> alert('Opa... deu merda!' ) </script>";
  header('location: Login.php?return=Opa deu merda!!!');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous" defer></script>
</head>
<body class="bg-light">

  <div class="container d-flex justify-content-center  min-vh-100 mt-5">

  <div class="alert alert-info " role="alert">
    <?php
    echo "<h4 class='alert-heading mt-3 mr-5 ml-5'>Seja bem vindo ao sistema ". $_SESSION['usuario'] ."!</h4>";
    ?>
     <form action="Sistema.php" method="POST">
  <button type="submit" class="btn btn-outline-dark btn-block mt-4 mb-4">Ir para a proxima página</button>
</form>
</div>
  </div>

</body>
</html>