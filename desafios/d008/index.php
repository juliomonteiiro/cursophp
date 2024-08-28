<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="../../estilo/style.css">
</head>
<body>
    <?php

    $valor = $_GET['n'] ?? 0;
    
    ?>
    <main>
        <h1>Informe o número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n" >Número:</label>
            <input type="number" name="n" id="n" value="<?=$valor?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
        $rq = sqrt("$valor") ;
        $rc = $valor ** (1/3);
        print "<p>Analisando o <strong>número $valor</strong>, temos:</p>";
        print "<ul><li>A raiz quadrada é <strong>" . number_format($rq, 2, ",", ".")."</strong></li>";
        print "<li>A raiz cúbica é <strong>" . number_format($rc, 2, ",", ".")."</strong></li></ul>";
        ?>
    </section>
</body>
</html>