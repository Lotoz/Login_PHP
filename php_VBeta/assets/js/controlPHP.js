/**
 * Verifica si los valores ingresados son validos
 *  OperativeID -> Es un username que el usuario se coloco para acceder, debe ser facil de recordad para el. 
 * Solo se permiten los siguientes caracteres: - _ letras y numeros. El resto sera considerado invalido
 * Ejemplo de usuario: Agente_Ukelele => Alto Clef //!Nota mental, generar para mas usuarios
 * Password -> Minimo 8 y maximo 64, permite todos los caracteres, por ende, se debe sanitizar la entrada de otro modo.DOMPurify Usar esta libreria
 * Este codigo es un controlador de todo esto
 */
document.getElementById('login-principal').addEventListener('submit', function (e) {
    e.preventDefault();

    let user = document.getElementById('user');
    let password = document.getElementById('password');
    let errorUser = document.getElementById('errorUser');
    let errorPassword = document.getElementById('errorPassword');

    const error = `<span class="bi bi-exclamation-triangle-fill"></span>`;

    // Limpiar errores previos
    errorUser.innerHTML = "";
    errorUser.hidden = true;
    errorPassword.innerHTML = "";
    errorPassword.hidden = true;

    // Regex correctos
    const userVerification = /^[a-zA-Z0-9_-]+$/;
    const passVerification = /^(?!.*["\\\/<>=()]).{8,64}$/;

    let valido = true;

    // Validación de usuario
    if (user.value.trim() === '') {
        errorUser.hidden = false;
        errorUser.innerHTML = error + ' El nombre es obligatorio.';
        valido = false;
    } else if (!userVerification.test(user.value.trim())) {
        errorUser.hidden = false;
        errorUser.innerHTML = error + ' Solo se permiten letras, números, "-" y "_".';
        valido = false;
    }

    // Validación de contraseña
    if (password.value.trim() === '') {
        errorPassword.hidden = false;
        errorPassword.innerHTML = error + ' La contraseña es obligatoria.';
        valido = false;
    } else if (!passVerification.test(password.value)) {
        errorPassword.hidden = false;
        errorPassword.innerHTML = error + ' La contraseña debe tener entre 8 y 64 caracteres.';
        valido = false;
    }

    if (valido) {
        this.submit();
    }
});
