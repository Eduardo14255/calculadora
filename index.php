<?php
if(isset($_POST['nro1'], $_POST['nro2'], $_POST['calcular'])){
    echo 'Dados Recebidos<br>';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="#" method="$_POST">
        <p>Primeiro Numero </p>
        <input type="number" name="nro1">
        <p> Segundo Numero </p><br>
        <input type="number" name="nro2">
        <br><br>

        <select name="calcular" id="calcular">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>
        <button type="submit" value="calcular">Calcular</button>
    </form>
</body>
</html>