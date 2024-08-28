<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="../../estilo/style.css">
</head>
<body>
    <?php

    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    $peso1 = $_GET['p1'] ?? 1;
    $peso2 = $_GET['p2'] ?? 1;

    $vp1 = $valor1*$peso1;
    $vp2 = $valor2*$peso2;
    $vpt = $vp1 + $vp2;
    $speso = $peso1 + $peso2;
    
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="v1" >1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            
            <label for="p1" >1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>">
            
            <label for="v2" >2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">

            <label for="p2" >2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2?>">
          
            <input type="submit" value="Calcular Raízes">
        </form>
    </main> 

    <section id="resultado">
    
    <?php 
       
       $mediaS = ($valor1 + $valor2)/2 ;
       $mediaP = $vpt / $speso;
    ?>
    
    <h2>Cálculo das Médias</h2>
        
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?></p>

        <ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($mediaS, 2, ",", ".") ?></li>
        
        <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?= number_format($mediaP, 2, ",", ".") ?></li></ul>
        
    </section>
</body>
</html>