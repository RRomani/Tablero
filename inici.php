<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inici</title>
</head>
<body>
    <?php 
        echo ("
        <form action='resultat.php' method='GET'>
            <input type='number' min='0' max='10' name='filas'>
            <input type='number' min='0' max='10' name='columnas'>
            <input type='submit'>
        </form>"
        )
    ?>
</body>
</html>