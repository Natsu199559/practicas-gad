<?php

include "./conexcion_bd/conexcion_bd.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gad Movilidad</title>
    <link rel="stylesheet" href="./css/style-login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Alertas -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="./imagenes/escudo.png">
        </div>
        <div class="contentbx">
            <div class="formBx">
                <h2>Login</h2>
                <form method="post" action="">
                    <?php include "./conexcion_bd/controlador.php"; ?>
                    <div class="inputBx">
                        <span>Nombre Usuario</span>
                        <input type="text" name="usuario">
                    </div>
                    <div class="inputBx">
                        <span>Contraseña</span>
                        <input type="password" name="clave">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Recordarme</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Ingresar" name="btningresar" id="btningresar">
                    </div>
                    <div class="inputBx">
                        <p>¿Olvido la contraseña?<a href="#">Recuperar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./js/alertas.js"></script>
</body>

</html>