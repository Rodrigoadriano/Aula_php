<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    $valor = $_REQUEST['val'] ?? "0";
    $ajuste = $_REQUEST['ajuste'] ?? "0";
    $dif = ( $valor * $ajuste / 100);
    $new = $valor + $dif;
    
    ?>

    <main>
        <h1>Calculo de percentual</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="Price">Salário:</label>
        <input type="number" name="val" id="val" step="0.01" value="<?=$valor?>">
        <label for="ajuste">Valor ajuste: (<strong><span id="p">?</span>%</strong>) </label>
        <input type="range" value="<?=$ajuste?>" name="ajuste" id="ajuste" min="0" max="100" step="1" oninput="update()" >    
        <input type="submit" value="Calcular">
        </form>

    </main>
    <section>
        <h2>Valor reajustado</h2>
        <p>O valor de <strong>R$<?=number_format($valor, 2, ",", ".")?></strong> com reajuste de <?=$ajuste?>% é de <strong>R$<?=number_format($new, 2, ",", ".")?></strong></p>
        <p>Um aumento de <strong>R$<?=number_format($dif, 2, ",", ".")?></strong></p>

    </section>

    <script>
        update();
        function update() {	
            p.innerText = ajuste.value;

        };

    </script>
    
</body>
</html>