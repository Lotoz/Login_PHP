<?php
//Conexion a base de datos
//Iniciamos la session
session_start();    //* Hay que hacer que sea segura

//? Incluir otro if que pregunte si esta la variable de sesion vigent
// Si es un si, devolvemos a if
//* if(){}
if (isset($_REQUEST['user'])) {
    if (isset($_REQUEST['password'])) {
        //Hacer lo de HTML_SANITAZION
        //!Declaracion de variables
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'login-php'; //! Esto es inseguro, deberia ser un usuario con los permisos minimos funcionales
        $DATABASE_PASS = 'Lotoz.1234Z';    //! Ya tenemos usuario solo con select :D
        $DATABASE_NAME = 'login-php-v1'; //? Porque es la primera version de esta base de datos -> Incluso, es una BD de prueba

        //* Conexion a la base de datos
        $connection_mysqli = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

        if ($connection_mysqli->connect_error) {
            //! En vez de ese servicio devuelve a afuera
            //* O base de datos fuera de servicio, decir la razon
            $_SESSION['Error'] = "No se puede comprobar la informacion ingresada en este momentos. Vuelva a intentarlo en unos minutos";
            //die('Error de conexion' . $connection_mysqli->connect_errno); Es solo para mostrar errores pero mejor lo otro
            header('Location:./index.php');
        }

        echo "conexion establecidada. ";

        // Vamos a hacer la query
        // $_ -> Se manejan con name
        // habria que comprobar si hubo un intento de XSS y contestar con un mensaje de error reprobatorio
        $usuario = $_POST['user'];
        $password = $_POST['password'];

        //Que da hacer la query.
        //Si el usuario o contrasena no existen se redicciona a index.
        //Si todo es correcto mandar a inicio
        //Probar ir haciendo tu propia base de datos mas cercana a tu programa

        $querySQL = "SELECT * from usuarios where idusuario = '$usuario' "; //!Debe hacerse si o si con este modo
        $resultado = $connection_mysqli->query($querySQL);
        if ($resultado->num_rows == 0) {
            $_SESSION['Error'] = "El usuario no existe";
            header('Location:./index.php');
        } else {
            //? Comprobar si la password existe
            //Si no existe, se redireciona a index.php
            //Si existe te lleva a inicio.php
            echo 'Existe';
        }
    } else {
        $_SESSION['Error'] = "No te has identificado pillo.";
        header('Location:./index.php');
    }
} else {
    $_SESSION['Error'] = "No te has identificado pillo.";
    header('Location:./index.php');
}
