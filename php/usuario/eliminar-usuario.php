<?php

if (!empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql = $conexcion->query(" DELETE FROM usuario WHERE usuario_id = $id ");

    if ($sql == 1) {
        echo '
            <script type="text/javascript">
                swal({
                title: "Advertencia",
                text:"Datos Borrados exitosamente",
                icon: "success",
                });
            </script>
            ';
    } else {
        echo '
            <script type="text/javascript">
                swal({
                title: "Advertencia",
                text:"Datos no eliminados",
                icon: "warning",
                });
            </script>
        ';
    } ?>
    <script>
        setTimeout(() => {
            window.history.replaceState(null, null, window.location.pathname)
        }, 0);
    </script>
    <?php
}