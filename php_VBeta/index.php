<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP - WEB</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/img/scpLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <div class="box-general m-auto">
        <h1>SCP - FOUNDATION</h1>
        <div>
            <img class="imagen" src="./assets/img/scpLogo.png" alt="SCP Logo" class="logoSCP">
        </div>
        <div>
            <form action="auth.php" method="POST">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="user" class="col-form-label">User: </label>
                    </div>
                    <div class="col-auto">
                        <input type="password" name="user" id="user" class="form-control">
                    </div>

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="password" class="col-form-label">Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="p-5">
                        <button type="submit" class="btn btn-danger m-5" id="btnLogin">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>