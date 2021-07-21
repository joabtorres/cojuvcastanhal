<?php ?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/gif" href="<?php echo BASE_URL ?>assets/imagens/icon.png" sizes="32x32" />
        <meta property="ogg:title" content="Painel Administrativo">
        <meta property="ogg:description" content="Painel Administrativo">
        <title>Painel Administrativo</title>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase.js"></script>
        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>
        <script>
            // Your web app's Firebase configuration
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
            var firebaseConfig = {
                apiKey: "AIzaSyAdjtwlJaxEmVQCv_Bn_ZgkuPDa8ud0yTE",
                authDomain: "codjuven.firebaseapp.com",
                databaseURL: "https://codjuven-default-rtdb.firebaseio.com",
                projectId: "codjuven",
                storageBucket: "codjuven.appspot.com",
                messagingSenderId: "954320337741",
                appId: "1:954320337741:web:4785e577b50fa020f65504",
                measurementId: "G-KY8NR9HC0Y"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();

        </script>
        <!-- Bootstrap -->
        <link href="<?php echo BASE_URL ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/fontawesome-all.min.css">
        <!--calendario-->
        <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/jquery-ui.css">
        <link href="<?php echo BASE_URL ?>assets/css/select2.min.css" rel="stylesheet">

        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="<?php echo BASE_URL ?>assets/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo BASE_URL ?>assets/js/select2.min.js"></script>
        <!--calendario;-->
        <script src="<?php echo BASE_URL ?>assets/js/jquery-ui.js"></script>
        <!--//chat-->
        <script>
            var base_url = "<?php echo BASE_URL ?>";
            function mostrarConteudo() {
                var elemento = document.getElementById("tela_load");
                elemento.style.display = "none";

                var elemento = document.getElementById("tela_sistema");
                if (elemento) {
                    elemento.style.display = "block";
                }

                var elemento = document.getElementById("interface_login");
                if (elemento) {
                    elemento.style.display = "block";
                }
            }
        </script>
        <script src="<?php echo BASE_URL ?>assets/js/ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/estilo.css">
    </head>

    <body>
        <div id="tela_load">
            <img src="<?php echo BASE_URL ?>assets/imagens/loading.gif" style="display: block; margin: auto; margin-top: 300px;">
        </div>
        <div id="tela_sistema">
            <!-- menu -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>assets/imagens/logo_menu.png"/></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo BASE_URL ?>home"><i class="fas fa-home"></i> Início</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-plus"></i> Cadastrar <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo BASE_URL ?>cadastrar/categoria"><i class="fas fa-plus"></i> Categoria</a></li>
                                    <li><a href="<?php echo BASE_URL ?>cadastrar/post"><i class="fas fa-plus"></i> Post</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo BASE_URL ?>cadastrar/usuario"><i class="fas fa-user-plus"></i> Usuario</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i> Consultar <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo BASE_URL ?>consultar/categoria"><i class="fas fa-search"></i> Categoria</a></li>
                                    <li><a href="<?php echo BASE_URL ?>consultar/post"><i class="fas fa-search"></i> Post</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo BASE_URL ?>consultar/usuario"><i class="fas fa-users"></i> Usuario</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($this->checkUser() == false): ?>
                                <li><a href="<?php echo BASE_URL ?>login"><i class="fas fa-user-lock"></i>  Login</a></li>
                                <?php
                            endif;
                            if ($this->checkUser() == true):
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt"></i> <?php echo $this->getNome() ?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo BASE_URL ?>editar/usuario/<?php echo md5($this->getId()) ?>"><i class="fas fa-users-cog"></i> Editar Perfil</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo BASE_URL ?>home/sair"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!--fim menu--> 

            <?php $this->loadViewInTemplate($viewName, $viewData) ?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="rodape" >
                            <p class="text-right" style="color: #666">&copy; Copyright 2021 - <a href="http://lattes.cnpq.br/0856780614635850" target="_blank" style="color: #666">Joab Torres Alencar</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#tela_sistema -->

        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL ?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo BASE_URL ?>assets/js/script.js"  ></script>
        <script src="<?php echo BASE_URL ?>assets/js/fontawesome-all.min.js"  ></script>


        <script src="<?php echo BASE_URL ?>assets/js/cojuvenapi.js"></script>
    </body>
</html>
