<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br><br>
        
        <label for="operacao">Operação:</label>
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
            <option value="resto">Resto da Divisão</option>
        </select><br><br>
        
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacao = $_POST["operacao"];
        
        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                echo "Resultado: " . $resultado;
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                echo "Resultado: " . $resultado;
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                echo "Resultado: " . $resultado;
                break;
            case "divisao":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "Resultado: " . $resultado;
                } else {
                    echo "Erro: divisão por zero.";
                }
                break;
            case "resto":
                if ($num2 != 0) {
                    $resultado = $num1 % $num2;
                    echo "Resultado: " . $resultado;
                } else {
                    echo "Erro: divisão por zero.";
                }
                break;
        }
    }
    ?>
</body>
</html>