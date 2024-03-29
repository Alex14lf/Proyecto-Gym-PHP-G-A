<?php
// Obtener la fecha y hora actual
setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
$fecha_actual = strftime("%A %e de %B de %Y");
$fecha_actual = ucfirst($fecha_actual); // Convertir el primer carácter a mayúscula
// Verificar y establecer la cookie "fecha_cookie"
if (!isset($_COOKIE["fecha_cookie"])) {
    setcookie("fecha_cookie", $fecha_actual, 0, "/");
    header("Location: ".$_SERVER['PHP_SELF']);
}

if (!isset($_COOKIE["visitas"])) {
    // Generar un número aleatorio
    $numeroAleatorio = mt_rand(1, 100);
    setcookie("visitas", $numeroAleatorio, 0, "/");
    header("Location: ".$_SERVER['PHP_SELF']);
    
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Demonios's Gym</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    </head>
    <body class="bodyLogin">
        <div>
            <!-- Section: Design Block -->
            <section>
                <!-- Jumbotron -->
                <div class="px-4 py-5 px-md-5 text-center text-lg-start">
                    <div class="container">
                        <div class="row gx-lg-5 align-items-center contenido">
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="my-5 display-3 fw-bold ls-tight text-light">
                                    Desata tu Poder en <br />
                                    <span class="text-primary">Demonios's Gym</span>
                                </h1>
                                <p class="index__p">
                                    ¡Bienvenido/a a Demonios Gym, donde tus metas fitness toman vida! En este santuario del entrenamiento, te invitamos a liberar tu verdadero potencial y desatar la fuerza que llevas dentro. Nuestro equipo de entrenadores expertos está aquí para guiarte en cada paso de tu viaje, ya sea que estés buscando esculpir tu cuerpo, aumentar tu resistencia o simplemente mantenerte en forma. En Demonios Gym, la determinación y el espíritu competitivo se combinan para crear un ambiente único donde cada entrenamiento se convierte en una victoria personal. ¡Prepárate para enfrentar tus desafíos con valentía y alcanzar nuevas alturas en Demonios Gym!
                                </p>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <div class="card">
                                    <div class="card-body py-5 px-md-5">
                                        <form action="./pages/validarLogin.php" method="POST">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="user">Usuario</label>
                                                <input type="text" id="user" name="user" class="form-control" />

                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="password">Contraseña</label>
                                                <input type="password" id="password" name="password" class="form-control" />
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block mb-4">Acceder</button>
                                        </form>
                                        <p class="error_login">
                                            <?php
                                            if (isset($_GET["login"]) && $_GET["login"] == "incorrecto") {
                                                echo "Usuario o contraseña incorrecto";
                                            }
                                            ?>
                                        </p>
                                        <?php
                                        // Mostrar la fecha almacenada
                                        echo "La fecha actual es: " . $_COOKIE["fecha_cookie"];
                                        echo "<br>";
                                        echo "Usarios visitando la web: " .$_COOKIE["visitas"] ;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
            </section>
            <!-- Section: Design Block -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>
