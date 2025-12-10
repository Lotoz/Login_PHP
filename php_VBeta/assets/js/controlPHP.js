/**
 * Verifica si los valores ingresados son validos
 *  OperativeID -> Es un username que el usuario se coloco para acceder, debe ser facil de recordad para el. 
 * Solo se permiten los siguientes caracteres: - _ letras y numeros. El resto sera considerado invalido
 * Ejemplo de usuario: Agente_Ukelele => Alto Clef //!Nota mental, generar para mas usuarios
 * Password -> Minimo 8 y maximo 64, permite todos los caracteres, por ende, se debe sanitizar la entrada de otro modo.DOMPurify Usar esta libreria
 * Este codigo es un controlador de todo esto
 */
document.getElementById('login-principal').addEventListener('submit', function (e) {
    //Detenemos el envio del formulario
    e.preventDefault();
    let user = document.getElementById('user');
    let password = document.getElementById('password');
    let errorUser = document.getElementById('errorUser');
    let errorPassword = document.getElementById('errorPassword');

    //Se debe concatenar
    const error = `<span class="bi bi-exclamation-triangle-fill"></span>`;
    // Limpiar errores previos
    errorUser.innerHTML = '';
    errorPassword.innerHTML = '';

    //Expresiones regulares Agregar
    const userVerfication = '';
    const passVerification = '';

    //Si todo sale bien, seria valido y enviaria el formulario
    let valido = true;

    // Validación de Nombre
    if (user.value.trim() === '' || userVerfication.test(user.value)) {
        errorUser.innerHTML = 'El nombre es obligatorio.';
        valido = false;
    }

    // Validación de contrasena, solo validamos el largo.
    if (password.value.trim() === '' || passVerification.test(password.value) ) {
        errorEmail.innerHTML = 'Introduce un email válido.';
        valido = false;
    }

    if (valido) {
        this.submit(); // Para enviar el formulario
    }
});