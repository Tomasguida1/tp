<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H2>Calculo de Impuestos por KiloWats</H2>
    <form action="tp3.php" method="get">
        <p>Por favor, ingrese los KiloWats consumidos</p>
        <h3>Lista de consumo por kilowats:</h3>
        <ol>
            <li>
                Si el consumo es menor o igual a 200kw, se le cobrara un impuesto del 50%
            </li>
            <li>
                Si el consumo es mayor a 200kw y menor que 1000kw, se le cobrara un impuesto del 10%
            </li>
            <li>
                Si el consumo es mayor o igual a 1000kw, se le cobrara un impuesto del 15%
            </li>
        </ol>
        <input type="number" name="kw" placeholder="kilowats consumidos">
        <input type="submit" name="calcular">
    </form>