<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form method="post">
                    <div class="form-group">
                       <select name="animal" id="animal" class="form-control form-control-lg">
                        <option>Selecione o animal que mais te agrada ...</option>
                        <option value="1">Cachorro</option>
                        <option value="2">Gato</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 rounded justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 border">
                <?php
                if(isset($_POST['animal'])){
                    if($_POST['animal'] == '1'){
                        echo "<img src=vira-lata-cachorro-Petlove.jpg class=img-fluid p-2 rounded>";
                    }else{
                        echo "<img src=filhote-de-gato-preto-e-branco-petlove.jpg class=img-fluid p-2 rounded>";
                    }
                }else{
                    echo "Escolha seu animal de preferência...";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>