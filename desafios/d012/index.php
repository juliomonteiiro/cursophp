<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012</title>
    <link rel="stylesheet" href="../../estilo/style.css">
</head>
<body>
    <?php
   

    $seg = $_GET['s'] ?? 0;
    
        
    ?>
    <main>
        <h1>Caculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="s" >Qual é o total de segundos?</label>
            <input type="number" name="s" id="s" value="<?=$seg?>">
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">

        <h2>Totalizando tudo</h2>

        <?php 

            $sobra = $seg;

            $semana = (int) ($sobra / 604_800);
            $sobra = $sobra % 604_800;
            
            $dia = (int) ($sobra / 86_400);
            $sobra = $sobra % 86_400;

            $hora = (int) ($sobra / 3_600);
            $sobra = $sobra % 3_600;

            $minuto = (int) ($sobra / 60);
            $sobra = $sobra % 60;

            $segundos = $sobra;
            
       

        ?>
        <p>Analisando o valor que você digitou, <strong><?=number_format($seg, 0, ",",".")?> segundos</strong> equivalem a um total de:</p>
    
        <ul>

        <li><?=$semana?> semanas</li>
        <li><?=$dia?> dias</li>
        <li><?=$hora?> horas</li>
        <li><?=$minuto?> minutos</li>
        <li><?=$segundos?> segundos</li>
    
        </ul>
    </section>
</body>
</html>