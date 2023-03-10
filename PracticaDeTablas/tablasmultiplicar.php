<!DOCTYPE html>
<html>
<title>Tablas Multiplicar</title>
<link href="estilo.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<head>
</head>
<body>

    
<h1>Tablas Multiplicar</h1>


<form action="operacion.php" method="get">

   
    <?php
    $tablas=$_GET["tablas"];
    echo'
    <input type="hidden" id="tablas" name="tablas"
    value="'.$tablas.'">
    ';

    $rango=$_GET["rango"];
    echo'
    <input type="hidden" id="rango" name="rango"
    value="'.$rango.'">
    ';

    $limite=$_GET["limite"];
    echo'
    <input type="hidden" id="limite" name="limite"
    value="'.$limite.'">
    ';


    if ($limite > $rango)
    {
        for ($i=$rango; $i <=$limite ; $i++) 
        { 
            echo'
            <label for="fname">'.$tablas. 'x'.$i.':</label>
            <input type = "text" id="x'.$i.'"
            name="x'.$i.'"
            value=""><br>';
        }  
    }
    else {
        for ($i = $rango; $i >=$limite ; $i++) 
        { 
            echo'
            <label for="fname">'.$tablas. 'x'.$i.':</label>
            <input type = "text" id="x'.$i.'"
            name="x'.$i.'"
            value=""><br>';
        }
    }
    ?>
    
     <br>
    <input class="btn btn-outline-primary" type="submit" value="Calcular">  
  
</form>











<div></div>
</body>

</html>