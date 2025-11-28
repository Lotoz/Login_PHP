<?php
//! Abrimos la sesion 
session_start(); //*Pendiente de hacer la seguridad
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP-WEB</title>

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/img/scpLogo.png" type="image/x-icon">
    <!-- //! Custom SCP style Estetica rota, revisar luego <link rel="stylesheet" href="./assets/css/style.css">-->


</head>

<body>
    <div class="fondo">
        <div id="cajaLogin" class="contenedor">
            <div class="formularioEstilo">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="scp-frame">
                            <img src="./assets/img/scpLogo.png" alt="SCP Logo" class="logoSCP">
                        </div>

                        <div class="col-md-8">
                            <form action="" method="POST" class="d-flex flex-column gap-3">
                                <div>
                                    <h2 class="text-center">SCP - FOUNDATION</h2>
                                </div>
                                <?php
                                if (isset($_SESSION['Error'])) {
                                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                        Usuario o contrasena invalidos
                                    </div>
                                    </div>';
                                    //Quita el alert
                                    //$_SESSION['Error'] = ""; //*Variable vacia
                                    unset($_SESSION['Error']);
                                }
                                ?>
                                <div class="labelsInputs">
                                    <label for="user">Username</label>
                                    <input type="text" id="user" name="user" class="form-control" placeholder=" User here...">
                                    <div class="mt-2">
                                        <p class="alert-scp" id="errorUser" hidden>Usuario inválido</p>
                                    </div>
                                </div>

                                <div class="labelsInputs">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Password here...">
                                    <div class="mt-2">
                                        <p class="alert-scp" id="errorPassword" hidden>Contraseña incorrecta</p>
                                    </div>
                                </div>

                                <div class="labelsInputs" id="codeSecure" hidden>
                                    <label for="codeSecureInput">Code-Secure</label>
                                    <input type="text" id="codeSecureInput" name="codeSecure" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" id="btnLogin"
                                        class="boton btn btn-outline-dark  w-100">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  //! Validacion de formulario (hacerla) -->
        <script src="./assets/js/controlPHP.js"></script>
        <!-- Bootstrap JS bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>