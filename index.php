<?php 
session_start();
$cerrar_session = '1';
if($cerrar_session){
    $cerrar_session = ($cerrar_session != '' ? $cerrar_session : '');
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100" style="background-color: #003660;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <img src="img/campus_los_angeles.png" width="200" alt="Campus Los Angeles Logo">

                            <h2 class="mb-3">Sistema de Gestión de Turnos DISE</h2>

                            <div class="form-group mb-4">
                                <label for="Email">Correo Electrónico</label>
                                <input type="email" id="Email" class="form-control form-control-lg" />
                            </div>

                            <div class="form-group mb-4">
                                <label for="password">Contraseña</label>
                                <input type="password" id="passwordlogin" class="form-control form-control-lg" />
                            </div>

                            <button class="btn btn-lg" type="submit" style="background-color: #ff9800" OnClick="Login()">Iniciar Sesión</button>

                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>