<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
                                <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Cerrar Sesion</a></li>
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


        <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-xs-12 col-md-12 col-lg-5">
                <div class="card noticia1">
                    <div class="card-body">
                        <h2 class="ph2">EMPEZO LA FORMULA 1: Ya esta cerca la nueva temporada de la F1.</h2>
                        <div class="mb-2">
                            <img class="img-fluid" src="assets/img/mercedes-w14.jpg" alt="">
                        </div>
                        <p class="pHome">Alucina con el nuevo monoplaza creado por la escuderia de Mercedes AMG. Llamado asi el Mercedes W14.</p>
                        <a class="btn btn-outline-danger text-decoration-none text-white" href="#">Leer mas sobre el W14</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-6 col-lg-3">
                <div class="card noticia2">
                    <div class="card-body">
                        <div class="mb-2">
                            <img class="img-fluid" src="assets/img/lewis.jpg" alt="">
                        </div>
                        <span class="text-danger small fst-italic">NEWS</span>
                        <p class="pHome">Lewis Hamilton estaria preparandose estos dias para las primeras pruebas con el W14</p>
                    </div>
                </div>
                <div class="card noticia2">
                    <div class="card-body">
                        <div class="mb-2">
                            <img class="img-fluid" src="assets/img/checo.jpg" alt="">
                        </div>
                        <span class="text-danger small fst-italic">NEWS</span>
                        <p class="pHome">Sera el Checo Perez el campeon mundial de esta nueva temporada? Segun reportes se encuentra en su mejor concentracion</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-3">
                <div class="card noticia2">
                    <div class="card-body">
                        <div class="mb-2">
                            <img class="img-fluid" src="assets/img/max.jpg" alt="">
                        </div>
                        <span class="text-danger small fst-italic">NEWS</span>
                        <p class="pHome">Max Verstappen preparandose para ser el nuevo tricampeon del mundo.</p>
                    </div>
                </div>
                <div class="card noticia2">
                    <div class="card-body">
                        <div class="mb-2">
                            <img class="img-fluid" src="assets/img/charles.jpg" alt="">
                        </div>
                        <span class="text-danger small fst-italic">NEWS</span>
                        <p class="pHome">Charles Leclerc, solo esta en busca de un objeto para esta nueva temporada... EL campeonato mundial</p>
                    </div>
                </div>
            </div>
        </div>



        <!-- FOOTER -->
        <div class="row bg-dark text-white p-4">
            <div class="col-xs-12 col-lg-4">
                <h4>Codigo Can3loN</h4>
            </div>

            <div class="col-xs-12 col-lg-4">
                <h5 class="mb-4">Links</h5>
                <div class="mb-2">
                    <a class="text-decoration-none text-white" href="">Terminos y condiciones</a>
                </div>
                <div>
                    <a class="text-decoration-none text-white" href="">Privacidad y politica</a>
                </div>
            </div>

            <div class="col-xs-12 col-lg-4">
                <h5 class="mb-4">Contactos</h5>
                <div class="mb-2">
                    <a class="text-decoration-none text-white" href="">Instagram</a>
                </div>
                <div class="mb-2">
                    <a class="text-decoration-none text-white" href="">Youtube</a>
                </div>
                <div class="mb-2">
                    <a class="text-decoration-none text-white" href="">Facebook</a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>