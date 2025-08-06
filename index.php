<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio Personalizado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sorteio de Números</h1>
    <?php

        $quantidade = 6; 
        if (isset($_POST['quantidade'])) {
            $quantidade = (int)$_POST['quantidade'];
            if ($quantidade < 6) $quantidade = 6;
            if ($quantidade > 10) $quantidade = 10;
        }


        $numeros = range(1, 60);
        shuffle($numeros);
        $resultado = array_slice($numeros, 0, $quantidade);
        sort($resultado);
    ?>

 
    <form method="POST">
        <label for="quantidade">Quantidade de números (6 a 10):</label>
        <input type="number" id="quantidade" name="quantidade" min="6" max="10" value="<?php echo $quantidade; ?>">
        <button class="btn-sortear" type="submit">Sortear Novamente</button>
    </form>


    <div class="numeros">
        <?php foreach($resultado as $numero): ?>
            <div class="bola"><?php echo $numero; ?></div>
        <?php endforeach; ?>
    </div>
</body>
</html>