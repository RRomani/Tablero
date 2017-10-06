<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultat</title>
</head>

<body>
<style>
    th{
        width: 40px;
        height: 40px;
    }
    .black{
        border: 1px black solid;
        background-color: black;
    }
    .white{
        border: 1px black solid;
        background-color: white;
    }
</style>
   
    <?php
        $filas = $_GET["filas"];
        $columnas = $_GET["columnas"];
        $char ='A';
    
    echo "<table>";
        for($n = 0 ; $n < $columnas+1 ; $n++){
            if($n == 0){
                echo "<th></th>";
            }
            else{
                echo "<th >$n</th>";
            }
            }    
        for( $i = 0 ; $i < $filas ; $i++){
           echo "<tr><th>$char</th>";
           $char++;
            for($n = 1 ; $n < $columnas+1 ; $n++){
                if(($n+$i)%2 == 0){
                    echo "<th class='black'></th>";
                }
                else{
                    echo "<th class='white'></th>";    
                }
            }
            echo"</tr>";
        }
    echo "</table>";
    ?>
</body>

</html>
