<div id="content">
    <button type="button" id="sidebarCollapse" class="btn btn-warning navbar-btn">
        <i class="glyphicon glyphicon-align-justify"></i>
    </button>
    <div id="content-title-head">
        <h4 class="title"><span class="text-orange"><i class="fas fa-play"></i></span> Vídeos</h4> 
    </div>
    <div>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 clear">
                    <form method="GET" autocomplete="off" action="<?php echo BASE_URL ?>/videos/index/1">
                        <section class="panel panel-primary">
                            <header class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <h4 class="panel-title"><i class="fa fa-search padding-5"></i> Painel de busca <i class="fa fa-eye pull-right"></i></h4> </a>
                            </header>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <article class="panel-body">
                                    <div class="row">

                                        <div class="col-md-3 form-group ">
                                            <label for="iCate" class="control-label">Categoria: </label><br/>
                                            <select id="iCate" name="nCategoria" class="form-control single-select">
                                                <option value="" selected="selected">Todas</option>
                                                <?php
                                                foreach ($categorias as $indice) {
                                                    echo '<option value="' . $indice['id'] . '">' . $indice['nome'] . '</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group ">
                                            <label for="iUsuario" class="control-label">Autor: </label><br/>
                                            <select id="iUsuario" name="nUsuario" class="form-control single-select">
                                                <option value="" selected="selected">Todos</option>
                                                <?php
                                                foreach ($usuarios as $indice) {
                                                    echo '<option value="' . $indice['id'] . '">' . $indice['nome'] . '</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label for="iTitulo" class="control-label">Título:  </label>
                                            <input type="text" name="nTitulo" id="iTitulo" class="form-control" placeholder="Exemplo: Vestibular 2020" />
                                        </div>
                                        <div class="form-group col-md-2"><br>
                                            <button type="submit" name="nBuscarBT" value="BuscarBT" class="btn btn-warning"><i class="fa fa-search"></i> Buscar</button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
            <?php
            if (!empty($posts)) {

                foreach ($posts as $indice):
                    ?>
                    <div class="row posts">
                        <div class="col-md-4">
                            <img src="<?php echo BASE_URL_PAINEL . '/' . $indice['imagem'] ?>" alt="postagem" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <a href="<?php echo BASE_URL . '/post/index/' . md5($indice['id']) ?>"><h3 class="text-blue"><?php echo $indice['titulo'] ?></h3></a>
                            <p class="text-justify"> <?php echo $indice['previo'] ?>, ...  <a href="<?php echo BASE_URL . '/post/index/' . md5($indice['id']) ?>" class="text-blue"> continue lendo &raquo;</a></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li class="text-blue">Categoria(s):</li>
                                        <li><span class="text-blue"><i class="fas fa-bookmark"></i></span> <?php echo $indice['categoria'] ?></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li class="text-blue">Autor:</li>
                                        <li><span class="text-blue"><i class="fas fa-user-circle"></i></span> <?php echo $indice['nome'] ?></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li class="text-blue">Publicação:</li>
                                        <li><span class="text-blue"><i class="fas fa-calendar-check"></i></span> <?php echo $this->formatDataViewComplete($indice['data']) ?> </li>
                                    </ul>
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
                    <div class = "col-sm-12 col-md-12 col-lg-12">
                        <ul class = "pagination">
                            <?php
                            echo "<li><a href='" . BASE_URL . "/noticias/index/1" . $metodo_buscar . "'>&laquo;</a></li>";
                            for ($p = 0; $p < ceil($paginas); $p++) {
                                if ($pagina_atual == ($p + 1)) {
                                    echo "<li class='active'><a href='" . BASE_URL . "/noticias/index/" . ($p + 1) . $metodo_buscar . "'>" . ($p + 1) . "</a></li>";
                                } else {
                                    echo "<li><a href='" . BASE_URL . "/noticias/index/" . ($p + 1) . $metodo_buscar . "'>" . ($p + 1) . "</a></li>";
                                }
                            }
                            echo "<li><a href='" . BASE_URL . "/noticias/index/" . ceil($paginas) . $metodo_buscar . "'>&raquo;</a></li>";
                            ?>
                        </ul>
                    </div> 
                </div> 

            <?php }
            ?>

        </div>

    </div>
</div>