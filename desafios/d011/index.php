<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $preco = $_GET['preco'] ?? 0;
    $porc = $_GET['reaj'] ?? 0;
    
    $porcentagem = $porc / 100;
    $reajuste = $preco * $porcentagem;

    ?>
    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="preco" >Preço do Produto(R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" step="0.01">
            
            <label for="reaj">Qual será o percentual do reajuste (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" min="0" max="100" name="reaj" id="reaj" step="1" value="<?=$porc?>" oninput="mudaValor()">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">

        <h2>Resultado do Reajuste</h2>

        <?php 

        $resultado = $preco + $reajuste;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        ?>

        <p>O produto que custava <?= numfmt_format_currency($padrao, $preco, "BRL")?>, com <strong><?=$porc?>% de aumento</strong> vai passar a custar <strong><?= numfmt_format_currency($padrao, $resultado, "BRL")?></strong> a partir de agora.</p>

    </section>
    <script>

        mudaValor()

        function mudaValor(){
            p.innerText = reaj.value
        }
    </script>
</body>
</html>