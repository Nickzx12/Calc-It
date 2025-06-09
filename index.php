<?php 
$nro1 = 0;
$nro2 = 0;
$resultado = 0;
$calcular = 'somar';
?>

<?php 
if(isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])){
    $nro1 = $_GET['nro1'];
    $nro2 = $_GET['nro2'];
    $calcular = $_GET['calcular'];

    switch($calcular) {
        case 'somar':
            $resultado = $nro1 + $nro2;
            break;
        case 'subtrair':
            $resultado = $nro1 - $nro2; 
            break;
        case 'multiplicar':
            $resultado = $nro1 * $nro2;
            break;
        case 'dividir':
            $resultado = $nro1 / $nro2;
            break;
        case 'restante':
            $resultado = $nro1 % $nro2;
            break;
        case 'potenciar':
            $resultado = pow($nro1, $nro2);
            break;
        case 'radiciar':
            $resultado = sqrt($nro1);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href= "style.css">
    <title>Calculadora</title>
</head>
<body>
    <H1>CALC´ IT!</H1>
    <h2>"calcule de maneira FÁCIL e RÁPIDA!"</h2>
    <br> <br>
    <form> 
        <select name="calcular"> 
    <option value="somar" <?= ($calcular == 'somar')?'Selected': ''; ?> >Somar</option>

    <option value="subtrair" <?= ($calcular == 'subtrair')?'Selected': ''; ?> >Subtrair</option>

    <option value="multiplicar" <?= ($calcular == 'multiplicar')?'Selected': ''; ?> >Multiplicar</option>

    <option value="dividir" <?= ($calcular == 'dividir')?'Selected': ''; ?> >Dividir</option>

    <option value="restante" <?= ($calcular == 'restante')?'Selected': ''; ?> >Restante</option>

    <option value="potenciar" <?= ($calcular == 'potenciar')?'Selected': ''; ?> >Potenciar</option>

    <option value="radiciar" <?= ($calcular == 'radiciar')?'Selected': ''; ?> >Radiciar</option>
        </select>

        <h3>Primeiro Número</h3> 
    <input type="number" name = "nro1" value = <?= $nro1 ?> required><br>

        <h3>Segundo Número</h3> 
    <input type="number" name = "nro2" value = <?= $nro2 ?> ><br> 

<br> <br>

<input type = "submit" value = "calcular">
<br> <br> 
<hr> <p> O resultado e <?= $resultado ?> </p> <hr>
 </form>

 <br> <br> 

</body>
</html>