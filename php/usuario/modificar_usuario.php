<?php
if (!empty($_POST["btn-actualizar"])) {
    if (!empty($_POST["usuario_admin"]) and !empty($_POST["clave_admin"])) {

        $id = $POST_["id_up"];
        $dni = $_POST["usuario_dni_up"];
        $nombre = $_POST["usuario_nombre_up"];
        $apellido = $_POST["usuario_apellido_up"];
        $telefono = $_POST["usuario_telefono_up"];
        $direccion = $_POST["usuario_direccion_up"];

        $usuario = $_POST["usuario_usuario_up"];
        $email = $_POST["usuario_email_up"];
        $clave = $_POST["usuario_clave_1_up"];
        $estado = $_POST["usuario_estado_up"];
        $privilegio = $_POST["usuario_privilegio_up"];

        $sql = $conexcion->query("UPDATE usuario SET
        usuario_dni='$dni',usuario_nombre='$nombre',usuario_apellido='$apellido',usuario_telefono='$telefono',usuario_direccion='$direccion',usuario_email='$email',usuario_usuario='$usuario',usuario_clave='$clave',usuario_estado='$estado',usuario_privilegio='$privilegio' WHERE usuario_id='$id'");

        if ($sql == 1) {
            echo '
                <script type="text/javascript">
                    swal({
                    title: "Aviso",
                    text:"Datos ingresados exitosamente",
                    icon: "success",
                    });
                </script>
            ';
        } else {
            echo '
                <script type="text/javascript">
                    swal({
                    title: "Advertencia",
                    text:"Datos no ingresados",
                    icon: "warning",
                    });
                </script>
            ';
        }

    } else {
        echo '
        <script type="text/javascript">
            swal({
            title: "Advertencia",
            text:"Existen campos vacios",
            icon: "warning",
            });
        </script>
        ';
    }
}