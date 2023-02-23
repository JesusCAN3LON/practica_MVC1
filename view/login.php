<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <div class="card cartaSesion mt-5">
                    <div class="card-body">
                        <div class="text-center">
                            <h2>Inicio de Sesion</h2>
                        </div>
                        <div>
                            <label class="form-label" for="">Correo:</label>
                            <input class="form-control" type="email">
                        </div>
                        <div class="divisorSm"></div>
                        <div>
                            <label class="form-label" for="">Contraseña:</label>
                            <input class="form-control" type="password">
                        </div>
                        <div class="d-grid">
                            <a class="btn btn-success mt-3" href="?url=homepage">ENTRAR</a>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-3">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h5>No tienes cuenta?</h5>
                            <h6>Registrate aqui abajo</h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="">Nombre:</label>
                                <input class="form-control mb-2" type="text">

                                <label class="form-label" for="">Apellido:</label>
                                <input class="form-control mb-2" type="text">

                                <label class="form-label" for="">Fecha de nacimiento:</label>
                                <input class="form-control" type="date">
                            </div>
                            <div class="col">
                                <label class="form-label" for="">Correo:</label>
                                <input class="form-control mb-2" type="email">

                                <label class="form-label" for="">Contraseña:</label>
                                <input class="form-control mb-2" type="password">

                                <div class="d-grid">
                                    <button class="btn btn-primary">REGISTRAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>