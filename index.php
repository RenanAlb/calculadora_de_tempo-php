<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Tempo</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="card">
    <h1>Calculadora de Tempo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="sec">Qual é o total de segundos?</label>
      <input type="number" name="sec">
      <button type="submit">Calcular</button>
    </form>
  </section>
  <section class="card">
    <h1>Totalizando tudo</h1>
    <?php
    $sec = $_GET["sec"] ?? 0;

    $sem = floor($sec / (24 * 60 * 60 * 7));
    $dias = floor(($sec % (24 * 60 * 60 * 7)) / (24 * 60 * 60));
    $hora = floor(($sec % (24 * 60 * 60)) / (60 * 60));
    $min = floor(($sec % (60 * 60)) / 60);
    $seg = floor($sec % 60);

    echo "Analisando o valor que foi digitado, $sec segundos equivalem a um total de:";
    echo "
      <ul>
        <li>$sem semanas</li>
        <li>$dias dias</li>
        <li>$hora horas</li>
        <li>$min minutos</li>
        <li>$seg segundos</li>
      </ul>
    "
    ?>
  </section>
</body>

</html>