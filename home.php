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
    <title>GAD MOVILIDAD</title>

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="./css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="./js/sweetalert2.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">

    <!-- General Styles -->
    <link rel="stylesheet" href="./css/style.css">

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
                    <img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    <figcaption class="roboto-medium text-center">
                        <?php echo $usuario; ?> <br><small class="roboto-condensed-light">Web Developer</small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
                        </li>
                        <?php
                        include "./conexcion_bd/conexcion_bd.php";
                        ?>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp;
                                Empleados <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="./usuario/user-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo
                                        empleado</a>
                                </li>
                                <li>
                                    <a href="./usuario/user-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp;
                                        Lista de
                                        empleados</a>
                                </li>
                                <li>
                                    <a href="./usuario/user-search.php"><i class="fas fa-search fa-fw"></i> &nbsp;
                                        Buscar
                                        empleado</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="./cliente/clientes-list.php"><i class="fas fa-clipboard-list fa-fw"></i>
                                        &nbsp; Lista
                                        de clientes</a>
                                </li>
                                <li>
                                    <a href="./cliente/clientes-search.php"><i class="fas fa-search fa-fw"></i> &nbsp;
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
                                    <a href="./registro/registro-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo
                                        Registro</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp;
                                Reportes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="./reportes/reportes_list.php"><i class="fas fa-plus fa-fw"></i> &nbsp;
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
                <a href="./usuario/user-update.php">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a href="./conexcion_bd/exit.php" class="">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>

            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
                </h3>
                <!--
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae
                    ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam
                    ratione.
                </p>
                -->
            </div>
            <!-- Content -->
            <div class="full-box tile-container">
                <?php
                $sql = $conexcion->query(" select * from usuario");
                $countempleados = 0;
                while ($datos = $sql->fetch_object()) {
                    $countempleados = $countempleados + 1;
                }
                ?>
                <a href="./usuario/user-list.php" class="tile">
                    <div class="tile-tittle">Empleados</div>
                    <div class="tile-icon">
                        <i class="fas fa-user-secret fa-fw"></i>
                        <p>
                            <?php echo $countempleados; ?> Registrados
                        </p>
                    </div>
                </a>

                <?php
                $sql = $conexcion->query(" select * from cliente");
                $countcliente = 0;
                while ($datoscliente = $sql->fetch_object()) {
                    $countcliente = $countcliente + 1;
                }
                ?>
                <a href="./cliente/clientes-list.php" class="tile">
                    <div class="tile-tittle">Clientes</div>
                    <div class="tile-icon">
                        <i class="fas fa-users fa-fw"></i>
                        <p>
                            <?php echo $countcliente; ?> Registrados
                        </p>
                    </div>
                </a>

                <?php
                $sql = $conexcion->query(" select * from registro");
                $countregistro = 0;
                while ($datosregistro = $sql->fetch_object()) {
                    $countregistro = $countregistro + 1;
                }
                ?>
                <a href="./registro/registro-new.php" class="tile">
                    <div class="tile-tittle">Registro</div>
                    <div class="tile-icon">
                        <i class="fas fa-pallet fa-fw"></i>
                        <p>
                            <?php echo $countregistro; ?> Registrados
                        </p>
                    </div>
                </a>

                <a href="./reportes/reportes_list.php" class="tile">
                    <div class="tile-tittle">Reportes</div>
                    <div class="tile-icon">
                        <i class="fas fa-clipboard-list fa-fw"></i>
                        <p>Reportes</p>
                    </div>
                </a>

                <a href="https://www.gadmriobamba.gob.ec/index.php/competencias/gadm" class="tile">
                    <div class="tile-tittle">GAD MOVILIDAD</div>
                    <div class="tile-icon">
                        <i class="fas fa-store-alt fa-fw"></i>
                        <p>Pagina</p>
                    </div>
                </a>
            </div>

        </section>
    </main>


    <!--=============================================
    =            Include JavaScript files           =
    ==============================================-->
    <!-- jQuery V3.4.1 -->
    <script src="./js/jquery-3.4.1.min.js"></script>

    <!-- popper -->
    <script src="./js/popper.min.js"></script>

    <!-- Bootstrap V4.3 -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap Material Design V4.0 -->
    <script src="./js/bootstrap-material-design.min.js"></script>
    <script>
        $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
        });
    </script>

    <script src="./js/main.js"></script>
</body>

</html>