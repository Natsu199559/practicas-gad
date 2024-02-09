<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor debes de iniciar sesión");
            window.location = "./index.php";
        </script>
    ';
    session_destroy();
    die();
} else {
    $usuario = $_SESSION['usuario'];
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Buscar usuarios</title>

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="../css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="../css/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="../js/sweetalert2.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">

    <!-- General Styles -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Alertas -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>

    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
        <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    <figcaption class="roboto-medium text-center">
                        <?php echo $usuario; ?> <br><small class="roboto-condensed-light">Web Developer</small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp;
                                Empleados <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../usuario/user-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo
                                        Empleado</a>
                                </li>
                                <li>
                                    <a href="../usuario/user-list.php"><i class="fas fa-clipboard-list fa-fw"></i>
                                        &nbsp; Lista de
                                        Empleados</a>
                                </li>
                                <li>
                                    <a href="../usuario/user-search.php"><i class="fas fa-search fa-fw"></i> &nbsp;
                                        Buscar
                                        Empleado</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../cliente/clientes-list.php"><i class="fas fa-clipboard-list fa-fw"></i>
                                        &nbsp; Lista
                                        de clientes</a>
                                </li>
                                <li>
                                    <a href="../cliente/clientes-search.php"><i class="fas fa-search fa-fw"></i> &nbsp;
                                        Buscar
                                        cliente</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Registro <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="registro-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo
                                        Registro</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp;
                                Reportes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../reportes/reportes_list.php"><i class="fas fa-plus fa-fw"></i> &nbsp;
                                        Listado
                                        de Reportes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://www.gadmriobamba.gob.ec/index.php/competencias/gadm"><i
                                    class="fas fa-store-alt fa-fw"></i> &nbsp; GAD MOVILIDAD</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Page content -->
        <section class="full-box page-content">
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a href="../usuario/user-update.php">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a href="#" class="btn-exit-system">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>

            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-search fa-fw"></i> &nbsp; Ingreso del Registro
                </h3>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="registro-new.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR
                            PLACA</a>
                    </li>
                </ul>
            </div>
            <?php
            include "../conexcion_bd/conexcion_bd.php";
            //include "../php/registro/agregar_registro.php";
            ?>
            <!-- Content -->
            <div class="container-fluid">
                <form class="form-neon" action="" method="post">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputSearch" class="bmd-label-floating">Ingrese la Placa</label>
                                    <input type="text" class="form-control" name="busqueda-" id="inputSearch"
                                        maxlength="30">
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-center" style="margin-top: 40px;">
                                    <button type="submit" class="btn btn-raised btn-info" name="btn_buscar_placa"
                                        value="ok"><i class="fas fa-search"></i>
                                        &nbsp; BUSCAR</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container-fluid">
                <form action="" method="post">
                    <input type="hidden" name="eliminar-busqueda" value="eliminar">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-6">
                                <p class="text-center" style="font-size: 20px;">
                                    Resultados de la busqueda <strong>“Buscar”</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container-fluid">
                <div class="table-responsive">
                    <?php
                    $sql = $conexcion->query("select * from cliente");
                    if (!empty($_POST["btn_buscar_placa"])) {
                        if (!empty($_POST["busqueda-"])) {
                            $busqueda = $_POST['busqueda-'];
                            $sql = $conexcion->query("select * from cliente where cliente_placas='$busqueda'");
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
                    ?>
                    <form action="" class="form-neon" method="post">
                        <?php
                        while ($dato = $sql->fetch_object()) {

                            ?>
                        <br><br><br>
                        <fieldset>
                            <legend><i class="far fa-address-card"></i> &nbsp; Información Personal</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="registro_dni" class="bmd-label-floating">C.I.</label>
                                            <input type="text" pattern="[0-9\-]{10,20}" class="form-control"
                                                name="registro_dni_reg" id="registro_dni" maxlength="20"
                                                value="<?= $dato->cliente_dni ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="registro_nombre" class="bmd-label-floating">Nombres</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}"
                                                class="form-control" name="registro_nombre_reg" id="registro_nombre"
                                                maxlength="35" value="<?= $dato->cliente_nombre ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="registro_apellido" class="bmd-label-floating">Apellidos</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}"
                                                class="form-control" name="registro_apellido_reg" id="registro_apellido"
                                                maxlength="35" value="<?= $dato->cliente_apellido ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br><br><br>
                        <fieldset>
                            <legend style="margin-top: 40px;"><i class="fas fa-info"></i> &nbsp; Nota</legend>
                            <p class="text-center">En caso de retencion del vehiculo que no sea el propetario
                                seleccione la casilla No y llenar los campos de abajo</p>
                            <legend><i class="fas fa-medal"></i> &nbsp; Datos Opcionales</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <p><span class="badge badge-info">Si</span> Si el dueño del vehiculo se
                                            encuentra en el acto.</p>
                                        <p><span class="badge badge-success">No</span> Si el dueño del vehiculo no se
                                            encuentra en el acto.</p>
                                        <div class="form-group">
                                            <select class="form-control" name="registro_dueño_reg">
                                                <option value="" selected="" disabled="">
                                                    Seleccione una de las opciones
                                                </option>
                                                <option value="1">Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="registro_dni_nopropietario"
                                                class="bmd-label-floating">C.I.</label>
                                            <input type="text" class="form-control"
                                                name="registro_dni_nopropietario_reg" id="registro_dni_nopropietario"
                                                maxlength="20" value="Cedula">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="registro_nombre_nopropietario"
                                                class="bmd-label-floating">Nombres</label>
                                            <input type="text" class="form-control"
                                                name="registro_nombre_nopropietario_reg"
                                                id="registro_nombre_nopropietario" maxlength="35" value="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="registro_apellido_nopropietario"
                                                class="bmd-label-floating">Apellidos</label>
                                            <input type="text" class="form-control"
                                                name="registro_apellido_nopropietario_reg"
                                                id="registro_apellido_nopropietario" maxlength="35" value="Apellido">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br><br><br>
                        <fieldset>
                            <legend style="margin-top: 40px;"><i class="fas fa-info"></i> &nbsp; Datos del Vehiculo
                            </legend>
                            <legend><i class="fas fa-medal"></i> &nbsp; Grua</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <p><span class="badge badge-info">Si</span> Si el vehiculo fue remolcado por la
                                            grua.</p>
                                        <p><span class="badge badge-success">No</span> Si el vehiculo no fue remolcado
                                            por la grua.</p>
                                        <div class="form-group">
                                            <select class="form-control" name="registro_grua_reg">
                                                <option value="" selected="" disabled="">
                                                    Seleccione una de las opciones
                                                </option>
                                                <option value="1">Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="registro_marca" class="bmd-label-floating">Marca</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{1,35}"
                                                class="form-control" name="registro_marca_reg" id="registro_marca"
                                                maxlength="20" value="<?= $dato->cliente_marca ?>">
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="registro_modelo" class="bmd-label-floating">Modelo</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{1,35}"
                                                class="form-control" name="registro_modelo_reg" id="registro_modelo"
                                                maxlength="35" value="<?= $dato->cliente_modelo ?>">
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="registro_color" class="bmd-label-floating">Color</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{1,35}"
                                                class="form-control" name="registro_color_reg" id="registro_color"
                                                maxlength="35" value="<?= $dato->cliente_color ?>">
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="registro_placa" class="bmd-label-floating">Placa</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{1,35}"
                                                class="form-control" name="registro_placa_reg" id="registro_placa"
                                                maxlength="35" value="<?= $dato->cliente_placas ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br><br><br>
                        <fieldset>
                            <legend style=" margin-top: 40px;"><i class="fas fa-info"></i> &nbsp; Datos de Retención
                            </legend>
                            <legend><i class="fas fa-medal"></i> &nbsp; Lugar del Patio de
                                Retención</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <p><span class="badge badge-info">CRV-1</span> Media
                                            Luna</p>
                                        <p><span class="badge badge-success">CRV-2</span>
                                            Mayorista</p>
                                        <div class="form-group">
                                            <select class="form-control" name="registro_cvr_reg">
                                                <option value="" selected="" disabled="">
                                                    Seleccione una de las opciones
                                                </option>
                                                <option value="1">CRV-1</option>
                                                <option value="2">CRV-2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="registro_causa_retencion" class="bmd-label-floating">Causa de la
                                                Retención</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\- ]{1,35}"
                                                class="form-control" name="registro_causa_retencion_reg"
                                                id="registro_causa_retencion" maxlength="20" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="registro_elabora_parte" class="bmd-label-floating">Elabora
                                                Parte</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{1,35}"
                                                class="form-control" name="registro_elabora_parte_reg"
                                                id="registro_elabora_parte" maxlength="35" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="registro_lugar" class="bmd-label-floating">Lugar</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{1,35}"
                                                class="form-control" name="registro_lugar_reg" id="registro_lugar"
                                                maxlength="35" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label for="registro_novedades" class="bmd-label-floating">Novedades</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]{0,1000}"
                                                class="form-control" name="registro_novedades_reg"
                                                id="registro_novedades" maxlength="1000" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br><br><br>
                        <p class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"
                                    value="ok" name="btn-registrar"></i>
                                &nbsp; Ingresar nuevo registro</button>
                        </p>
                        <?php } ?>

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
                        } ?>
                    </form>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </section>
    </main>


    <!--=============================================
    =            Include JavaScript files           =
    ==============================================-->
    <!-- jQuery V3.4.1 -->
    <script src="../js/jquery-3.4.1.min.js"></script>

    <!-- popper -->
    <script src="../js/popper.min.js"></script>

    <!-- Bootstrap V4.3 -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap Material Design V4.0 -->
    <script src="../js/bootstrap-material-design.min.js"></script>
    <script>
    $(document).ready(function() {
        $('body').bootstrapMaterialDesign();
    });
    </script>

    <script src="../js/main.js"></script>
</body>

</html>