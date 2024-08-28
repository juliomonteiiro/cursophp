<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <main>
    <h1>Conversor de moedas v2.0</h1>
    <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
            
            $dolar = $dados["value"][0]["cotacaoCompra"];

            $numero = $_GET["numero"] ?? 0;
            
            $conversao = $numero / $dolar; 
    
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    
              
            echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong></p>";
            echo "<p><strong>*Cotação fixa de R$ 5,50</strong> informada diretamente no código<p/>";
        ?>      
         <button onclick="javascript:window.location.href='index.html'">&#x2B05 Voltar</button>
    </main>
</body>
</html>