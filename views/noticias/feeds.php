<div id="content">
    <div class="menu-principal">
        <button type="button" id="sidebarCollapse" class="btn btn-warning navbar-btn">
            <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <div id="content-title-head">
            <h4 class="title"><span class="text-orange"><i class="fas fa-rss"></i></span> Feeds</h4> 
        </div>
    </div> 
    <div>
        <div class="container-fluid" >

            <form method="GET" autocomplete="off" action="<?php echo BASE_URL.'/'.$genero ?>/index/1">
                <div class="row">
                    <div class="form-group col-xs-12">
                        <div class="input-group">
                            <input type="text" name="nTitulo" id="iTitulo" placeholder="Título da publicação" class="form-control" />
                            <span class="input-group-addon padding-0"><button type="submit" name="nBuscarBT" value="BuscarBT" class="btn-xs "><i class="fa fa-search"></i> Buscar</button></span>
                        </div>
                    </div>
                </div>
            </form>

            <?php
            if (!empty($posts)) {

                foreach ($posts as $indice):
                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="<?php echo BASE_URL . '/post/index/' . md5($indice['id']) ?>"><img src="<?php echo BASE_URL_PAINEL . '/' . $indice['imagem'] ?>" alt="postagem" class="img-responsive img-center"></a>
                                <div class="caption">
                                    <a href="<?php echo BASE_URL . '/post/index/' . md5($indice['id']) ?>"><h4><?php echo $indice['titulo'] ?></h4></a>
                                    <p style="font-size:0.8em"><i class="fas fa-calendar-check text-orange"></i> <?php echo (!empty($indice['data'])) ? $this->formatDataViewComplete($indice['data']) : '' ?>  | <i class="fas fa-bookmark text-orange"></i> <?php echo (!empty($indice['categoria'])) ? $indice['categoria'] : '' ?>  </p>
                                    <p class="text-justify"> <?php echo $indice['previo'] ?>, ...  <a href="<?php echo BASE_URL . '/post/index/' . md5($indice['id']) ?>" class="text-orange"> continue lendo &raquo;</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            } else {
                echo '<div class="row"><div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-times"></i> Desculpe, não foi possível localizar nenhum registro !
                    </div>
                </div>
                </div>';
            }
            ?>
            <!--fim <div class="row posts">-->

            <!--inicio da paginação-->
            <?php
            if (isset($paginas) && ceil($paginas) > 1) {
                ?>
                <div class = "row">
                    <div class = "col-xs-12">
                        <ul class = "pagination">
                            <?php
                            echo "<li><a href='" . BASE_URL . "/".$genero."/index/1" . $metodo_buscar . "'>&laquo;</a></li>";
                            for ($p = 0; $p < ceil($paginas); $p++) {
                                if ($pagina_atual == ($p + 1)) {
                                    echo "<li class='active'><a href='" . BASE_URL . "/feed/index/" . ($p + 1) . $metodo_buscar . "'>" . ($p + 1) . "</a></li>";
                                } else {
                                    echo "<li><a href='" . BASE_URL . "/".$genero."/index/" . ($p + 1) . $metodo_buscar . "'>" . ($p + 1) . "</a></li>";
                                }
                            }
                            echo "<li><a href='" . BASE_URL . "/".$genero."/index/" . ceil($paginas) . $metodo_buscar . "'>&raquo;</a></li>";
                            ?>
                        </ul>
                    </div> 
                </div> 

            <?php }
            ?>

        </div>

    </div>
</div>