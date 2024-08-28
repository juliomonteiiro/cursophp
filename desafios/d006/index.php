<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="../../estilo/style.css">
</head>
<body>
    <?php

    $valor1 = $_GET['divivendo'] ?? 0;
    $valor2 = $_GET['divisor'] ?? 1;
        
    ?>
    <main>
        <h1>Anatomia da uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="divivendo" >Dividendo</label>
            <input type="number" name="divivendo" id="divivendo" value="<?=$valor1?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        
    <h2>Estrutura da Divisão</h2>
        
        <?php 
        
        $quociente = intdiv($valor1, $valor2);
        $resto = $valor1 % $valor2;
    
        ?>

        <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html> 