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
    <h1>Analisador de Número Real</h1>
        <?php 
            
            $numero = $_GET["numero"];
         $inteiro = (int) $numero;
         $frac = $numero - $inteiro;
            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário<p/>";
            echo "<ul><li>\t A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") .   "</strong></li>";
            echo "<li>\t    A parte fracionária é <strong>". number_format($frac, 3, ",", ".") .  "</strong></li></ul>";
        ?>
         <button onclick="javascript:window.location.href='index.html'">&#x2B05 Voltar</button>
    </main>
</body>
</html>