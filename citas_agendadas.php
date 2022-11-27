<?php
include("conexion_bd.php");

    $sql = mysqli_query($conexion, "SELECT * FROM `usuario`");
    
    $row = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>usuarios registrados</h1>
    <table>
        <tr>
            <th>nombres</th>
            <th>apellidos</th>
            <th>correo</th>
            <th>telefono</th>
        </tr>
        <?php
        while ($row=mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <th><?php echo $row['nombres'] ?></th>
            <th><?php echo $row['apellidos'] ?></th>
            <th><?php echo $row['correo'] ?></th>
            <th><?php echo $row['telefono'] ?></th>
        </tr>
        <?php
        }
        ?>
    </table>

    <button onclick="alerta()">press</button>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetalert2.js"></script>
    <script src="js/script.js"></script>
</body>
</html>