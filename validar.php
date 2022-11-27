<?php
include("conexion_bd.php");

if (isset($_POST['login'])) {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$correo' AND password='$clave'")
        or die($enlace . "problemas en la consulta ");

    $resultado = $consulta->num_rows;
    if ($resultado != 0) {
        echo "<script>alert('Haz iniciado sesion con exito');</script>";
        echo "<script>window.location='pagina_principal.html';</script>";
        
    } else {
        echo "<script>alert('El usuario o la contraseña son incorrectos');</script>";
        echo "<script>window.location='index.html';</script>";
    }
}

?>