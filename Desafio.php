<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separar Pares e Ímpares</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Separar Pares e Ímpares</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inicio = $_POST["inicio"];
            $fim = $_POST["fim"];

            if (!is_numeric($inicio) || !is_numeric($fim) || $inicio > $fim) {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Por favor, insira um intervalo de números válido.';
                echo '</div>';
            } else {
                $pares = [];
                $impares = [];
                $soma_pares = 0;
                $soma_impares = 0;

                for ($i = $inicio; $i <= $fim; $i++) {
                    if ($i % 2 == 0) {
                        $pares[] = $i;
                        $soma_pares += $i;
                    } else {
                        $impares[] = $i;
                        $soma_impares += $i;
                    }
                }
                ?>

                <h2>Números Pares</h2>
                <?php if (!empty($pares)): ?>
                    <p><?php echo implode(", ", $pares); ?></p>
                    <p><strong>Soma dos Pares:</strong> <?php echo $soma_pares; ?></p>
                <?php else: ?>
                    <p>Nenhum número par encontrado no intervalo.</p>
                <?php endif; ?>

                <h2 class="mt-3">Números Ímpares</h2>
                <?php if (!empty($impares)): ?>
                    <p><?php echo implode(", ", $impares); ?></p>
                    <p><strong>Soma dos Ímpares:</strong> <?php echo $soma_impares; ?></p>
                <?php else: ?>
                    <p>Nenhum número ímpar encontrado no intervalo.</p>
                <?php endif; ?>

                <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-secondary mt-3">Voltar</a>

                <?php
            }
        } else {
            ?>
            <form method="post">
                <div class="form-group">
                    <label for="inicio">Número Inicial:</label>
                    <input type="number" class="form-control" id="inicio" name="inicio" required>
                </div>
                <div class="form-group">
                    <label for="fim">Número Final:</label>
                    <input type="number" class="form-control" id="fim" name="fim" required>
                </div>
                <button type="submit" class="btn btn-primary">Processar Números</button>
            </form>
            <?php
        }
        ?>
    </div>
</body>
</html>