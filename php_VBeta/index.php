<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP - SECURE LOGIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="./assets/img/scpLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <div class="box-general">
        <div class="header-section">
            <img src="./assets/img/scpLogo.png" alt="SCP Logo" class="logoSCP">
            <h1>RESTRICTED ACCESS</h1>
            <p class="warning-text">WARNING: AUTHORIZED PERSONNEL ONLY</p>
        </div>

        <form action="auth.php" method="POST" class="login-form" id="login-principal">
            <div class="mb-3 text-start">
                <label for="user" class="form-label">OPERATIVE ID</label>
                <input type="text" name="user" id="user" class="form-control scp-input" placeholder="Enter ID..." autocomplete="off">

            </div>
            <!--Alert <div class="alert alert-danger mb-3 scp-error" role="alert" id="errorUser">
            </div>-->

            <div class="mb-4 text-start">
                <label for="password" class="form-label">SECURITY CLEARANCE</label>
                <input type="password" name="password" id="password" class="form-control scp-input" placeholder="Enter Password...">
            </div>
            <!--Alert <div class="alert alert-danger mb-3 scp-error" role="alert" id="errorPassword">
            </div>-->

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-scp" id="btnLogin">AUTHENTICATE</button>
            </div>
        </form>

        <div class="footer-code">
            SECURE. CONTAIN. PROTECT.
        </div>
    </div>
</body>

</html>