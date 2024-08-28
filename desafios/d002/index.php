<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../estilo/style.css">
</head>
<body>
  
    <main>
    <h1>Trabalhando com números aleatórios</h1>
        <?php 
            
        $minimo = 0;
        $maximo = 100;
        $sorteio = mt_rand($minimo, $maximo);
        echo "<p>Gerando número aleatório entre $minimo e $maximo...<br>O número gerado foi <strong>$sorteio</strong><p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>