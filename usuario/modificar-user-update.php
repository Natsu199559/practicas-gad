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
    <title>Actualizar usuario</title>

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
                                    <a href="../registro/registro-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp;
                                        Nuevo Registro/a>
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
                <a href="./user-update.php">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a href="#" class="btn-exit-system">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>

            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR EMPLEADO
                </h3>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="user-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO EMPLEADO</a>
                    </li>
                    <li>
                        <a href="user-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE
                            EMPLEADOS</a>
                    </li>
                    <li>
                        <a href="user-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR EMPLEADO</a>
                    </li>
                </ul>
            </div>

            <!-- Content -->
            <div class="container-fluid">
                <form action="" class="form-neon" autocomplete="off" method="post">
                    <?php
                    include "../conexcion_bd/conexcion_bd.php";
                    include "../php/usuario/modificar_usuario.php";
                    $id = $_GET["id"];
                    $sql = $conexcion->query(" select * from usuario where usuario_id=$id");
                    while ($datos = $sql->fetch_object()) {
                        ?>
                    <fieldset>
                        <input type="hidden" name="id_up" value="<?= $_GET["id"] ?>">
                        <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_dni" class="bmd-label-floating">DNI</label>
                                        <input type="text" pattern="[0-9\-]{10,20}" class="form-control"
                                            name="usuario_dni_up" id="usuario_dni" maxlength="20"
                                            value="<?= $datos->usuario_dni ?>">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_nombre" class="bmd-label-floating">Nombres</label>
                                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                            name="usuario_nombre_up" id="usuario_nombre" maxlength="35"
                                            value="<?= $datos->usuario_nombre ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_apellido" class="bmd-label-floating">Apellidos</label>
                                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                            name="usuario_apellido_up" id="usuario_apellido" maxlength="35"
                                            value="<?= $datos->usuario_apellido ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_telefono" class="bmd-label-floating">Teléfono</label>
                                        <input type="text" pattern="[0-9()+]{8,20}" class="form-control"
                                            name="usuario_telefono_up" id="usuario_telefono" maxlength="20"
                                            value="<?= $datos->usuario_telefono ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_direccion" class="bmd-label-floating">Dirección</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}"
                                            class="form-control" name="usuario_direccion_up" id="usuario_direccion"
                                            maxlength="190" value="<?= $datos->usuario_direccion ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <fieldset>
                        <legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_usuario" class="bmd-label-floating">Nombre de
                                            usuario</label>
                                        <input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control"
                                            name="usuario_usuario_up" id="usuario_usuario" maxlength="35"
                                            value="<?= $datos->usuario_usuario ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_email" class="bmd-label-floating">Email</label>
                                        <input type="email" class="form-control" name="usuario_email_up"
                                            id="usuario_email" maxlength="70" value="<?= $datos->usuario_email ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <span>Estado de la cuenta &nbsp; <span class="badge badge-info">
                                                <?= $datos->usuario_dni ?>
                                            </span></span>
                                        <select class="form-control" name="usuario_estado_up">
                                            <option value="Activa" selected="">Activa</option>
                                            <option value="Deshabilitada">Deshabilitada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <fieldset>
                        <legend style="margin-top: 40px;"><i class="fas fa-lock"></i> &nbsp; Nueva contraseña</legend>
                        <p>Para actualizar la contraseña de esta cuenta ingrese una nueva y vuelva a escribirla. En caso
                            que no desee actualizarla debe dejar vacíos los dos campos de las contraseñas.</p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_clave_nueva_1" class="bmd-label-floating">Contraseña</label>
                                        <input type="password" class="form-control" name="usuario_clave_nueva_1"
                                            id="usuario_clave_nueva_1" pattern="[a-zA-Z0-9$@.-]{4,100}" maxlength="100"
                                            value="<?= $datos->usuario_clave ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_clave_nueva_2" class="bmd-label-floating">Repetir
                                            contraseña</label>
                                        <input type="password" class="form-control" name="usuario_clave_nueva_2"
                                            id="usuario_clave_nueva_2" pattern="[a-zA-Z0-9$@.-]{4,100}" maxlength="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <fieldset>
                        <legend><i class="fas fa-medal"></i> &nbsp; Nivel de privilegio</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <p><span class="badge badge-info">Control total</span> Permisos para registrar,
                                        actualizar y eliminar</p>
                                    <p><span class="badge badge-success">Edición</span> Permisos para registrar y
                                        actualizar</p>
                                    <p><span class="badge badge-dark">Registrar</span> Solo permisos para registrar</p>
                                    <div class="form-group">
                                        <select class="form-control" name="usuario_privilegio_up">
                                            <?php
                                                if ($datos->usuario_privilegio == "1") {
                                                    $cambio = "Control total";
                                                } elseif ($datos->usuario_privilegio == "2") {
                                                    $cambio = "Edición";
                                                } else {
                                                    $cambio = "Registrar";
                                                }
                                                ?>
                                            <option value="" selected="" disabled="">
                                                <?php echo $cambio; ?>
                                            </option>
                                            <option value="1">Control total</option>
                                            <option value="2">Edición</option>
                                            <option value="3">Registrar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <fieldset>
                        <p class="text-center">Para poder guardar los cambios en esta cuenta debe de ingresar su nombre
                            de usuario y contraseña</p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_admin" class="bmd-label-floating">Nombre de usuario</label>
                                        <input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control"
                                            name="usuario_admin" id="usuario_admin" maxlength="35" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="clave_admin" class="bmd-label-floating">Contraseña</label>
                                        <input type="password" class="form-control" name="clave_admin" id="clave_admin"
                                            pattern="[a-zA-Z0-9$@.-]{4,100}" maxlength="100" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"
                                value="ok" name="btn-actualizar"></i>
                            &nbsp; ACTUALIZAR</button>
                    </p>
                    <?php } ?>
                </form>
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