<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $atual = date("Y");
    $nasci = $_GET['n'] ?? 2000;
    $ano = $_GET['a'] ?? $atual;
        
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="n" >Em que ano você nasceu?</label>
            <input type="number" name="n" id="n" min="1900" max="<?=$atual?>" value="<?=$nasci?>">
            
            <label for="a">Quer saber sua idade em que ano? (Atuamente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="a" id="a" min="<?=$nasci?>" value="<?=$ano?>">
            
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
        
        $idade =  $ano - $nasci;
        
        ?>

        <p>Quem nasceu em <?=$nasci?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?></p>
    
</section>
</body>
</html>