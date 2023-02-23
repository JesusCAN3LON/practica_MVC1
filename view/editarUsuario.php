<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <nav class="navbar navbar-expand-lg headerHome">
                <div class="container-fluid">
                    <a href="?url=homepage"><img class="me-5" src="assets/icons/F1.png" width="auto" height="40" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Equipos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Corredores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Mercancia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Pistas</a>
                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <i class="bi bi-bell text-danger fs-1 me-5"></i>

                            <!-- Menu perfil -->
                            <a href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle fs-1 text-danger"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="?url=editarUsuario"><i class="bi bi-gear fa-fw me-2"></i>Modificar Perfil</a></li>
                                <li><a class="dropdown-item bg-danger-soft-hover" href="?url=login"><i class="bi bi-power fa-fw me-2"></i>Cerrar Sesion</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                            <!-- Fin menu perfil -->

                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- FIN DE HEADER -->

        <div class="row d-flex justify-content-center mt-3 mb-3">
            <div class="col-xs-12 col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="m-2 mb-4 d-flex justify-content-center align-items-end">
                            <img class="rounded-circle" src="assets/img/yo.jpg" height="150px" alt="">
                            <i class="bi bi-pencil-square fs-3"></i>
                        </div>
                        <div class="m-2 mb-4">
                            <label class="form-label" for="">Nombre de usuario</label>
                            <input class="form-control border-danger" type="text" placeholder="can3lon">
                        </div>
                        <div class="m-2  mb-4">
                            <label class="form-label" for="">Correo</label>
                            <input class="form-control border-danger" type="email" placeholder="jesus1234@hotmail.com">
                        </div>
                        <div class="m-2  mb-4">
                            <label class="form-label" for="">Contraseña anterior</label>
                            <input class="form-control border-danger" type="password" placeholder="********">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="m-2 mb-4">
                            <label class="form-label" for="">Cedula</label>
                            <input class="form-control border-danger" type="text" placeholder="27199177">
                        </div>
                        <div class="m-2  mb-4">
                            <label class="form-label" for="">Fecha de nacimiento</label>
                            <input class="form-control border-danger" id="fecha" type="date" value="1999-12-30">
                        </div>
                        <div class="m-2  mb-4">
                            <label class="form-label" for="">Nueva contraseña</label>
                            <input class="form-control border-danger" type="password" placeholder="********">
                        </div>
                        <div class="m-2  mb-4">
                            <label class="form-label" for="">Ingrese nuevamente la nueva contraseña</label>
                            <input class="form-control border-danger" type="password" placeholder="********">
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-success">Actualizar Datos</button>
                </div>
            </div>
        </div>








    </div>
</body>

</html>