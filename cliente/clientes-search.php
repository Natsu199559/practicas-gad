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

    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/00f72f78ca.js" crossorigin="anonymous"></script>
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
                                        Nuevo Registro </a>
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
                    <i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO
                </h3>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="./clientes-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE
                            USUARIOS</a>
                    </li>
                    <li>
                        <a class="active" href="./clientes-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR
                            USUARIO</a>
                    </li>
                </ul>
            </div>
            <?php
            include "../conexcion_bd/conexcion_bd.php";
            ?>
            <!-- Content -->
            <div class="container-fluid">
                <form class="form-neon" action="" method="post">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputSearch" class="bmd-label-floating">Ingresa la C.I.</label>
                                    <input type="text" class="form-control" name="busqueda-" id="inputSearch"
                                        maxlength="30">
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-center" style="margin-top: 40px;">
                                    <button type="submit" class="btn btn-raised btn-info" name="btn_buscar_cliente"
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
                            <div class="col-12">
                                <p class="text-center" style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"
                                            name="bnt-eliminar-cliente" value="ok"></i> &nbsp; ELIMINAR
                                        BÚSQUEDA</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>DNI</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>MARCA</th>
                                <th>MODELO</th>
                                <th>PLACA</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = $conexcion->query("select * from cliente");

                        if (!empty($_POST["btn_buscar_cliente"])) {
                            if (!empty($_POST["busqueda-"])) {
                                $busqueda = $_POST['busqueda-'];
                                $sql = $conexcion->query("select * from cliente where cliente_dni='$busqueda'");
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

                        if (!empty($_POST["bnt-eliminar-cliente"])) {
                            $sql = $conexcion->query("select * from usuario");
                        }

                        while ($dato = $sql->fetch_object()) {
                            ?>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    <?= $dato->cliente_id ?>
                                </td>
                                <td>
                                    <?= $dato->cliente_dni ?>
                                </td>
                                <td>
                                    <?= $dato->cliente_nombre ?>
                                </td>
                                <td>
                                    <?= $dato->cliente_apellido ?>
                                </td>
                                <td>
                                    <?= $dato->cliente_marca ?>
                                </td>
                                <td>
                                    <?= $dato->cliente_modelo ?>
                                </td>
                                <td>
                                    <?= $dato->cliente_placas ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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