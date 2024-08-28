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
    <h1>Resultado final</h1>
        <?php 
            
            $numero = $_GET["numero"] ?? 0;
         $ant = $numero - 1;
         $suc = $numero + 1;
            echo "<p>Seu número é <strong>$numero</strong><p/>";
            echo "<p>O <em>antecessor</em> do seu número é $ant<p/>";
            echo "<p>O <em>sucessor</em> do seu número é $suc<p/>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05 Voltar</button>
    </main>
</body>
</html>