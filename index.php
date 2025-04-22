<?php
    $numero1 = "0";
    $numero2 = "0";
    $suma = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['txtNumero1'];
        $numero2 = $_POST['txtNumero2'];
        $suma = $numero1 + $numero2;
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera web</title>
</head>

<body>
    <form action="" method="post">
        <h3>App Calculadora</h3>
        <label for="">Nùmero 1: </label>
        <input value="<?php echo $numero1 ?>"  type="text" name="txtNumero1" id="txtNumero1"> <br>
        <label for="">Nùmero 2: </label>
        <input value="<?php echo $numero2 ?>" type="text" name="txtNumero2" id="txtNumero2">
        <button type="submit">Procesar</button>
    </form>
</body>
</html>
<?php 
    if ($suma !== "") {
        ?>
            <h4>Resultado: <?php echo $suma; ?></h4>
        <?php
    }
?>

