<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="../../estilo/style.css">
    <style>
        img.nota {
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
 

    $saque = $_GET['s'] ?? 0;
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    $resto = $saque;

    $tot100 = floor($resto / 100);
    $resto %= 100;

    $tot50 = floor($resto / 50);
    $resto %= 50;

    $tot10 = floor($resto / 10);
    $resto %= 10;

    $tot5 = floor($resto / 5);
    $resto %= 5;

    $tot2 = floor($resto / 2);
    $resto %= 2;

    $tot1 = $resto;
    

        
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="s" >Qual valor você deseja sacar? (R$)<sub>*</sub></label>
            <input type="number" name="s" id="s" step="1" required value="<?=$saques?>">
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis: R$ 100, R$ 50, R$ 10, R$5, R$ 2 e moeda de R$ 1</p>
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">

        <h2>Saque de <?=numfmt_format_currency($padrao, $saque, "BRL")?> realizado</h2>

        <p>O caixa eletrônico vai te entregar as seguinte notas:</p>
        
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$tot5?></li> 
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> x<?=$tot2?></li>
            <li><img src="imagens/1-real.jpg" alt="Moeda de 1" class="nota"> x<?=$tot1?></li>   
        </ul>
   
    </section>
</body>
</html>