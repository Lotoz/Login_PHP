<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <!-- 
    Este apartado de la pagina ya tiene una estetica basada en las preferencias del usuario, siendo que puede estar en modo oscuro o claro. E incluso, segun el usuario tendra personalizaciones unicas.
     Doctor Alto Clef Tiene un theme personalizado mas parecido a las plantas y de colores agrios y otonales. -> Permiso 3
     Doctor Bright tiene un theme personalizado de unicornios y de colores chillones pasteles. -> Permiso 4
     Doctor Gears tiene el theme predeterminado. -> Permiso 5
     El administrador tiene el theme personalizado de colores rojos y oscuros. -> Permiso total
     Un usuario nuevo, al acceder tendra para elegir diversos themes, el puede elegir de los preexistentes, usar el predeterminado o pedirle a soporte un theme especial.
     Doctor Ice tiene un theme de estilo invernal. -> Permiso 2
     Doctora Sophie tiene un theme de colores pasteles -> Permiso 1
     -->
    <nav>
        <!-- Le permite navegar por las diferentes pestanas, que son: Tareas pendientes, Anotaciones SCP, Apuntes propios, SCP Base de datos.
      Ninguna estara implementada por ahora, solo se ven. 
      En el caso de SCP Base de datos, es una base de datos basada en la api de scp. Donde el usuario puede buscar informacion sobre varios scp segun su permiso.
      Es decir, si es permiso 1, solo puede ver safe, si es permiso 2 safe y algunos euclid. Si es permiso 3 euclid todos. Si es permiso 4, euclid y keters.
      Permiso 5 tiene acceso especiales.
      Administrador ve absolutamente todo. -->
    </nav>
    <main>
        <div class="msgUser">
            <h1>Hola {Insertar nombre del usuario en cuestion}</h1>
            <p>Recuerda cerrar tu sesion antes de salir. No queremos a que nadie de la mano de la serpiente, la coalicion global o [REDACTED]. Ingrese a tu cuenta</p>
        </div>
        <div class="taskPendients">
            <!-- Un pequeno dashboard con tareas pendientes que tiene el usuario-->
        </div>
        <div class="alertsContention">
            <!-- Alerta de contension de scp a cargo-->
        </div>
    </main>
    <footer>
        <!-- Fotter bonito con creditos-->
    </footer>

</body>

</html>