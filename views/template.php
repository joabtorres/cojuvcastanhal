<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/gif" href="<?php echo BASE_URL ?>/assets/imagens/icon.png" sizes="32x32" />
        <meta property="ogg:title" content="Coordenadoria da Juventude de Castanhal">
        <meta property="ogg:description" content="Coordenadoria da Juventude de Castanhal">
        <title>CODJUVEN - Coordenadoria da Juventude de Castanhal</title>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/lightbox.min.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">
    </head>

    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h4> <b class="sidebar-sigla">COJUVCASTANHAL</b></h4>
                    <i>Coordenadoria da Juventude de Castanhal</i>
                </div>
                <ul class="list-unstyled components">
                    <li><a href="<?php echo BASE_URL ?>/home"> <span class="text-orange"><i class="fas fa-home"></i></span> Inicial</a></li>
                    <li><a href="<?php echo BASE_URL ?>/quemsomos"><span class="text-orange"><i class="fas fa-users"></i></span> Quem Somos</a></li>
                    <li><a href="<?php echo BASE_URL ?>/video"><span class="text-orange"><i class="fas fa-play"></i></span> Vídeos</a></li>
                    <li><a href="<?php echo BASE_URL ?>/feed"><span class="text-orange"><i class="fas fa-rss"></i></span> Feed</a></li>
                    <li><a href="<?php echo BASE_URL ?>/fotos"><span class="text-orange"><i class="far fa-images"></i></span> Fotos</a></li>
                    <li><a href="<?php echo BASE_URL ?>/podcast"><span class="text-orange"><i class="fas fa-podcast"></i></span> Podcast</a></li>
                    <li><a href="<?php echo BASE_URL ?>/contato"><span class="text-orange"><i class="fas fa-envelope"></i></span> Contato</a></li>
                    <li><a href="<?php echo BASE_URL ?>/social"><span class="text-orange"><i class="fas fa-icons"></i></span> Rede Sociais</a></li>
                </ul>

            </nav>

            <!-- Page Content Holder -->
            <?php $this->loadViewInTemplate($viewName, $viewData) ?>
        </div>


        <div class="overlay"></div>
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="<?php echo BASE_URL ?>/assets/js/fontawesome-all.min.js"  ></script>
        <script src="<?php echo BASE_URL ?>/assets/js/lightbox.min.js"></script>
        <script src="<?php echo BASE_URL ?>/assets/js/script.js"></script>

    </body>

</html>
