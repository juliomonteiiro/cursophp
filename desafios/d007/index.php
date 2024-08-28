<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $salario = $_GET['s'] ?? 0;
    $sm = 1_412.00 ;

    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="s" >Salário(R$)</label>
            <input type="number" name="s" id="s" value="<?=$salario?>" step="0.01">
           <p>Considerando o salário mínimo de <strong>R$ <?=number_format($sm, 2,",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
        $conversao = intdiv($salario, $sm);
        $resto = $salario % $sm;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        print "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL").  " ganha <strong>$conversao salários minímos</strong> + " . numfmt_format_currency($padrao, $resto, "BRL").  "</p>";
        ?>
    </section>
</body>
</html>