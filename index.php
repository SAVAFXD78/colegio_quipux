<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Quipux</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="stylesheet" href="css/light.css">


    <link rel="icon" type="image/x-icon" href="assets/img/quipux_logo-removebg-preview.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>


<style>
    .open-dialog img{
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        object-fit: cover;
        cursor: pointer;
    }
    #dialog{
        margin: 0;
        margin-left: calc(100vw - 20rem);
        margin-top: 5rem;
    }

    html {
        overflow:   scroll;
    }

    ::-webkit-scrollbar {
        width: 0px;
        background: transparent; /* make scrollbar transparent */
    }
</style>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <img style="width:150px; height: 150px;" src="assets/img/quipux_logo-removebg-preview.png" alt="Logo">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Movilidad Inteligente y Tecnologia</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#page-top">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Misión y Visión</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contactos</a></li>
                </ul>
            </div>
        </div>

        <?php
        if(!isset($_SESSION)) session_start(); 
        if(isset($_SESSION['name'])) { 
            $image = $_SESSION['image'];
            if($image == '') $image = 'default_profile.jpg'?> 
            <div class="open-dialog" onclick="dialog.show()">
                <img src="form/img/profiles/<?php echo $image ?>">
            </div>
        <?php } ?> 
         
        <md-dialog id="dialog">
        <div slot="headline">
            PERFIL
        </div>
        <form slot="content" id="form-id" method="dialog">
        <p> <?php echo $_SESSION['name'] ?> </p>
        <p> <?php echo $_SESSION['email'] ?> </p>
        <br>
        <a href="modificaruser.php">Actualizar Perfil</a>
        <br>
        <br>
        <a href="cerrar.php">Cerrar Sesion</a>
        </form>
        <div slot="actions">
            <md-text-button form="form-id">Aceptar</md-text-button>
        </div>
    </md-dialog>

    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Colegio Quipux</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5"></h2>
                    <section>
                        <div id="outer">

                        <?php
                            if(!isset($_SESSION['name'])) { ?> 
                            <a class="fcc-btn" href="form/login.html">
                                <div class="button_slide slide_down">INICIAR SESION </div>
                            </a>
                            <?php } ?>

                       
                        <?php
                        // Verifica si el usuario ha iniciado sesión Y si el rol es de secretaria o admin
                        if(isset($_SESSION['name']) && $_SESSION['role_id'] == 1 || isset($_SESSION['name']) && $_SESSION['role_id'] == 2) { // Asume que el rol 1 es admin y el 2 es secretaria
                          ?>
                         <a class="fcc-btn" href="register.html">
                        <div class="button_slide slide_right">Registrar Usuario</div>
                         </a>
                        <?php } ?> 

                        <?php
                        // Verifica si el usuario ha iniciado sesión Y si el rol es de secretaria o admin
                        if(isset($_SESSION['name']) && $_SESSION['role_id'] == 1 || isset($_SESSION['name']) && $_SESSION['role_id'] == 2) { // Asume que el rol 1 es admin y el 2 es secretaria
                          ?>
                         <a class="fcc-btn" href="registrarMaterias.html">
                        <div class="button_slide slide_right">Registrar Materias</div>
                         </a>
                        <?php } ?> 

                        <?php
                        
                       // Verifica si el usuario ha iniciado sesión Y si el rol es de secretaria
                       if(isset($_SESSION['name']) && $_SESSION['role_id'] == 2) { 
                            ?>
                        <a class="fcc-btn" href="mostrar_usuarios.php">
                        <div class="button_slide slide_right">Usuarios</div>
                        </a>
                        <?php } ?> 

                        <?php
                        
                        // Verifica si el usuario ha iniciado sesión Y si el rol es de secretaria o admin
                        if(isset($_SESSION['name']) && $_SESSION['role_id'] == 1) { // Asume que el rol 1 es admin
                          ?>
                         <a class="fcc-btn" href="dash.php">
                        <div class="button_slide slide_right">Dashboard</div>
                         </a>
                        <?php } ?>   
                        
                     </section>
                     <br>
                     <section>
                        <div id="outer">
                        
                        <?php
                        // Verifica si el usuario ha iniciado sesión Y si el rol es de secretaria o admin
                        if(isset($_SESSION['name']) && $_SESSION['role_id'] == 1 || isset($_SESSION['name']) && $_SESSION['role_id'] == 2) { // Asume que el rol 1 es admin y el 2 es secretaria
                          ?>
                         <a class="fcc-btn" href="mostrar_usuarios.php">
                        <div class="button_slide slide_right">Mostrar Usuarios</div>
                         </a>
                        <?php } ?> 

                        <?php
                        // Verifica si el usuario ha iniciado sesión Y si el rol es de secretaria o admin
                        if(isset($_SESSION['name']) && $_SESSION['role_id'] == 1 || isset($_SESSION['name']) && $_SESSION['role_id'] == 2) { // Asume que el rol 1 es admin y el 2 es secretaria
                          ?>
                         <a class="fcc-btn" href="mostrar_materias.php">
                        <div class="button_slide slide_right">Mostrar Materias</div>
                         </a>
                        <?php } ?> 
                        
                     </section>
                </div>
            </div>
        </div>
    </header>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/images.jpg"
                        alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Misión</h4>
                        <p class="text-black-50 mb-0">
                        </p>
                    </div>
                </div>
            </div>


            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/eje.jpg"
                        alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Visión</h4>
                        <p class="text-black-50 mb-0">
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Contactanos</h2>
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Dirección</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Medellin, Antioquia</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">quipux@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Telefono</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">#######</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <ul class="redes">
                    <li class="icon facebook">
                        <a class="fcc-btn"
                            href="#"></a>
                        <span class="button">Facebook</span>
                        <span><i class="fab fa-facebook-f"></i></span>
                    </li>
                    <li class="icon instagram">
                        <a class="fcc-btn" href="#"></a>
                        <span class="button">Instagram</span>
                        <span><i class="fab fa-instagram"></i></span>
                    </li>
            </div>
        </div>
        <br>
        <br>
    </section>


    

    <!-- Footer-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script type="importmap">
        {
        "imports": {
          "@material/web/": "https://esm.run/@material/web/"
        }
      }
    </script>
    <script type="module">
        import '@material/web/all.js';
        import {
            styles as typescaleStyles
        } from '@material/web/typography/md-typescale-styles.js';

        document.adoptedStyleSheets.push(typescaleStyles.styleSheet);
    </script>

    <script>
        // function to set a given theme/color-scheme
        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }
        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'dark') {
                setTheme('light');
            } else {
                setTheme('dark');
            }
        }
        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'dark') {
                setTheme('dark');
            } else {
                setTheme('light');
            }
        })();
    </script>
</body>

</html>