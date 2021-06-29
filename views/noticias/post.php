<div id="content">
    <button type="button" id="sidebarCollapse" class="btn btn-warning navbar-btn">
        <i class="glyphicon glyphicon-align-justify"></i>
    </button>
    <div id="content-title-head">
        <h4 class="title"><?php echo (!empty($post['titulo'])) ? $post['titulo'] : '' ?></h4> 
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <p><i class="fas fa-calendar-check text-orange"></i> <?php echo (!empty($post['data'])) ? $this->formatDataViewComplete($post['data']) : '' ?>  | <i class="fas fa-bookmark text-orange"></i> <?php echo (!empty($post['categoria'])) ? $post['categoria'] : '' ?>  | <span class="text-orange"><i class="fas fa-user-circle"></i></span> <?php echo (!empty($post['nome'])) ? $post['nome'] : '' ?>  </p>
            <?php echo (!empty($post['texto'])) ? $post['texto'] : '' ?>  
            <?php
            if (isset($post['imagens']) && is_array($post['imagens'])) :
                foreach ($post['imagens'] as $indice) :
                    ?>
                    <div class="col-md-4 text-center">
                        <a class="example-image-link" href="<?php echo BASE_URL_PAINEL . '/' . $indice['grande'] ?>" data-lightbox="example-set" data-title=""><img class="example-image img-responsive margin-bottom-10x" src="<?php echo BASE_URL_PAINEL . '/' . $indice['min'] ?>" alt=""/>
                        </a></div>
                    <?php
                endforeach;
            endif;
            ?>

        </div>
    </div>
</div>