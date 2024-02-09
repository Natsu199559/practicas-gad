<?php
if (!empty($_POST["btn_guardar"])) {
    if (!empty($_POST["usuario_dni_reg"]) and !empty($_POST["usuario_nombre_reg"]) and !empty($_POST["usuario_apellido_reg"]) and !empty($_POST["usuario_usuario_reg"]) and !empty($_POST["usuario_clave_1_reg"]) and !empty($_POST["usuario_privilegio_reg"])) {

        $dni = $_POST["usuario_dni_reg"];
        $nombre = $_POST["usuario_nombre_reg"];
        $apellido = $_POST["usuario_apellido_reg"];
        $telefono = $_POST["usuario_telefono_reg"];
        $direccion = $_POST["usuario_direccion_reg"];

        $usuario = $_POST["usuario_usuario_reg"];
        $email = $_POST["usuario_email_reg"];
        $clave = $_POST["usuario_clave_1_reg"];
        $estado = "activo";
        $privilegio = $_POST["usuario_privilegio_reg"];

        $sql = $conexcion->query("INSERT INTO `usuario`(`usuario_dni`, `usuario_nombre`, `usuario_apellido`, `usuario_telefono`, `usuario_direccion`, `usuario_email`, `usuario_usuario`, `usuario_clave`, `usuario_estado`, `usuario_privilegio`) VALUES
        ('$dni','$nombre','$apellido','$telefono','$direccion','$email','$usuario','$clave','$estado','$privilegio')");

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