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
    <h1>Conversor de moedas v1.0</h1>
        <?php 
            
        $numero = $_GET["numero"] ?? 0;
        $dolar = 5.50;
        $conversao = $numero / $dolar; 

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong></p>";
            echo "<p><strong>*Cotação fixa de R$ 5,50</strong> informada diretamente no código<p/>";
        ?>
         <button onclick="javascript:window.location.href='index.html'">&#x2B05 Voltar</button>
    </main>
</body>
</html>