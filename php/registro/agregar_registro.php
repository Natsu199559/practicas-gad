<?php

if (!empty($_POST["btn-registrar"])) {
    if (!empty($_POST["registro_dueño_reg"]) and !empty($_POST["registro_grua_reg"]) and !empty($_POST["registro_cvr_reg"]) and !empty($_POST["registro_causa_retencion_reg"]) and !empty($_POST["registro_elabora_parte_reg"]) and !empty($_POST["registro_novedades_reg"])) {

        $dni = $_POST['registro_dni_reg'];
        $nombre = $_POST['registro_nombre_reg'];
        $apellido = $_POST['registro_apellido_reg'];

        $dueño_si_no = $_POST['registro_dueño_reg'];
        $dni_no_propietario = $_POST['registro_dni_nopropietario_reg'];
        $nombre_no_propietario = $_POST['registro_nombre_nopropietario_reg'];
        $apeliddo_no_propietario = $_POST['registro_apellido_nopropietario_reg'];

        $grua = $_POST['registro_grua_reg'];
        $marca = $_POST['registro_marca_reg'];
        $modelo = $_POST['registro_modelo_reg'];
        $color = $_POST['registro_color_reg'];
        $placa = $_POST['registro_placa_reg'];

        $crv = $_POST['registro_cvr_reg'];
        $causa_retencion = $_POST['registro_causa_retencion_reg'];
        $elabora_parte = $_POST['registro_elabora_parte_reg'];
        $novedades = $_POST['registro_novedades_reg'];
        $lugar = $_POST['registro_lugar_reg'];

        $sql = $conexcion->query("INSERT INTO registro (`registro_dni`, `registro_nombre`, `registro_apellido`, `registro_dni_nopropietario`, `registro_nombre_nopropietario`, `registro_apellido_nopropietario`, `registro_grua`, `registro_lugar`, `registro_marca`, `registro_color`, `registro_placa`, `registro_modelo`, `registro_causa_detencion`, `registro_elabora_parte`, `registro_novedades`, `registro_si_no_propietario`, `registro_crv`) 
        VALUES ('$dni', '$nombre','$apellido','$dni_no_propietario','$nombre_no_propietario','$apeliddo_no_propietario','$grua','$lugar','$marca','$color','$placa','$modelo','$causa_retencion','$elabora_parte','$novedades','$dueño_si_no','$crv')");

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