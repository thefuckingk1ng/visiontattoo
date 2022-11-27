<?php
include("conexion_bd.php");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['clave']) >= 1) {
        $nombres = trim($_POST['nombres']);
        $apellidos = trim($_POST['apellidos']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $clave = trim($_POST['clave']);
        $id_rl = 2;

        $consulta = mysqli_query($conexion, "INSERT INTO `usuario` (`id_user`, `nombres`, `apellidos`, `email`, `telefono`, `password`, `id_rl`) 
            VALUES (NULL, '$nombres', '$apellidos', '$correo', '$telefono', '$clave', '$id_rl')");

        if ($consulta) {
        ?>
            <h3 class="check">te haz registrado con exito</h3>
        <?php
        } else {
        ?>
            <h3 class="error">error al registrarse, intentalo de nuevo</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="faild">por favor complete todos los campos</h3>
<?php
    }
}
?>