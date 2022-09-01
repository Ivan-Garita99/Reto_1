<?php
include 'operaciones.php';


$request = ($_SERVER['REQUEST_METHOD']);
$mensaje = "Calculadora";
echo "<h1>" . $mensaje . "</h1>";

if ($request == "POST") {
    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];
    $operacion = $_POST["select"];

   switch($operacion) {
    case "suma":
      $resultado = $calculadora->suma($n1, $n2);
    break;

    case "resta":
        $resultado = $calculadora->resta($n1, $n2);
    break;

    case "multiplicación":
        $resultado = $calculadora->multi($n1, $n2);
    break;
    
    case "división":
        $resultado = $calculadora->divi($n1, $n2);
      break;
    
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="/calculadora.php" method="post">
        <input type="text" id="numero1" name="numero1">
        <select name="select">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicación">*</option>
            <option value="división">/</option>
        </select>
        <input type="text" id="numero2" name="numero2">



        <button>
            Resultado
        </button>
    </form>
    <h1><?= $resultado?> </h1>
    <?php
    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];


    ?>


</body>

</html>