<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elefantes</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6">
              <form method="post">
                 <div class="form-group row">
                       <div class="col-12 col-sm-6">
                         <input type="number" name="elefante" id="elefante" class="form-control form-control-lg" placeholder="Quantidade de elefantes">
                       </div>
                       <div class="col-12 col-sm-6">
                         <button type="submit" class="btn btn-primary btn-lg btn-block">Cantar</button>
                       </div>
                 </div>
              </form>
          </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 alert alert-primary">
                <?php
                if(isset($_POST['elefante'])){
                    for($j=1; $j<=$_POST['elefante']; $j++){
                        if($j%2 == 0){
                            echo $j." elefantes";
                            for($i=0; $i<$j; $i++){
                                echo " incomodam";
                            }
                            echo " muito mais ... <br>";
                        }else if($j == 1){
                            echo $j." elefante incomoda muita gente ... <br>";
                        }else{
                            echo $j." elefantes incomodam muito mais ... <br>";
                        }
                    }
                }else{
                    echo '<p class="text-dark">Escolha a quantidade de elefantes</p>';
                }
                ?>
                <!--<p class="text-dark">Um elefante incomoda muita gente ...</p>-->
            </div>
        </div>

    </div>
</body>
</html>