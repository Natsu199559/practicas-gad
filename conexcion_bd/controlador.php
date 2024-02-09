<?php

session_start();

if (!empty($_POST['btningresar'])) {
    if (empty($_POST['usuario']) && empty($_POST['clave'])) {
        echo '
                <script type="text/javascript">
                    swal({
                    title: "Ha ocurrido un error inesperado!",
                    text:"Existen campos vacios",
                    icon: "error",
                    allowOutsideclic:true,  /**pra no salir */
                    allowEscapekey: true,   /**para salir por la tecla esc */
                    allowEnterkey: false,   /**para salor dando enter */
                    });
                </script>
            ';

    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];

        $sql = $conexcion->query("select * from usuario where usuario_usuario='$usuario' and usuario_clave='$clave'");

        if ($datos = $sql->fetch_object()) {
            header("location:home.php");
            $_SESSION['usuario'] = $usuario;
        } else {
            echo '
                <script type="text/javascript">
                    swal({
                    title: "Ha ocurrido un error inesperado!",
                    text:"Los datos ingresado son incorrectos",
                    icon: "error",
                    allowOutsideclic:true,  /**pra no salir */
                    allowEscapekey: true,   /**para salir por la tecla esc */
                    allowEnterkey: false,   /**para salor dando enter */
                    });
                </script>
            ';
        }
    }

}