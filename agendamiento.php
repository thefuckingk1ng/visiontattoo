<?php
include("conexion_bd.php");

if (isset($_POST['agendar'])) {
    if (strlen($_POST['fecha']) >= 1 && strlen($_POST['hora']) >= 1 && strlen($_POST['archivo']) >= 1 && strlen($_POST['comentario']) >= 1) {
        $fecha = trim($_POST['fecha']);
        $hora = trim($_POST['hora']);
        $archivo = trim($_POST['archivo']);
        $comentario = trim($_POST['comentario']);
        $id_usr = 1;

        $consulta = mysqli_query($conexion, "INSERT INTO `citas` (`id_cita`, `fecha_cita`, `hora_cita`, `adjuntar_arch`, `idea_tattoo`, `id_usr`) 
        VALUES (NULL, '$fecha', '$hora', '$archivo', '$comentario', '$id_usr')");

        if ($consulta) {
        ?>
            <script>alert=("te haz registrado con exito")</script>
            <h3 class="check">te haz registrado con exito</h3>
        <?php
        } else {
        ?>
            <h3 class="error">error al registrarse, intentalo de nuevo</h3>
            <script>alert=("error al registrarse, intentalo de nuevo")</script>
        <?php
        }
    } else {
        ?>
        <h3 class="faild">por favor complete todos los campos</h3>
        <script>alert=("por favor complete todos los campos")</script>
<?php
    }
}
?>