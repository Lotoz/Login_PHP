<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="./assets/img/scpLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <style>
        .scp-img {
            background-size: auto;
            animation: back 2s infinite;
            border-radius: 52%;
            background-color: #272727ff;
        }

        @keyframes back {
            0% {
                opacity: 0.7;
            }

            50% {
                opacity: 1;
                box-shadow: 0 0 10px #343434ff;
            }

            100% {
                opacity: 0.7;
            }
        }
    </style>
</head>

<body>
    <div class="grid text-center">
        <div>
            <img class="scp-img" src="./assets/img/SCP_Foundation.svg" alt="imagenSCP">
        </div>
        <div>
            <h1>La sesion se ha cerrado correctamente</h1>
        </div>

        <div class="text-align-center">
            <a class="warning-text" href="./index.php">Volver al inicio de sesion.</a>
        </div>
    </div>


</body>

</html>