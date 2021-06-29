<div id="container-noticias">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-destaque">
                    <h2 class="text-center text-uppercase">ULTIMAS Nóticias</h2>
                    <div class="sublinha"><span></span><i class="fas fa-layer-group fa-2x"></i><span></span></div>
                </div>
            </div>
        </div>
        <?php
        if (!empty($posts)) {
            ?>
            <?php
            $qtd = 0;
            foreach ($posts as $indice):
                ++$qtd;
                if ($qtd == 1) {
                    echo '  <div class="row">';
                }
                ?>
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo BASE_URL_PAINEL . '/' . $indice['imagem'] ?>" alt="postagem" class="img-responsive">
                        <div class="caption">
                            <a href="<?php echo BASE_URL . '/noticias/post/' . md5($indice['id']) ?>"><h3 class="text-blue"><?php echo $indice['titulo'] ?></h3></a>
                            <p><i class="fas fa-calendar-check text-blue"></i> <?php echo $this->formatDataViewComplete($indice['data']) ?> | <i class="fas fa-bookmark text-blue"></i> <?php echo $indice['categoria'] ?></p>
                            <p class="text-justify"> <?php echo $indice['previo'] ?>, ...  <a href="<?php echo BASE_URL . '/noticias/post/' . md5($indice['id']) ?>" class="text-blue"> continue lendo &raquo;</a></p>
                         </div>
                    </div>
                </div>
                <?php
                if ($qtd == 3) {
                    echo ' </div>';
                    $qtd = 0;
                }
            endforeach;
            if ($qtd > 0) {
                echo ' </div>';
            }
        }
        ?>
    </div>
</div>
