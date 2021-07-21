<div id="content">
    <div class="menu-principal">
        <button type="button" id="sidebarCollapse" class="btn btn-warning navbar-btn">
            <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <div id="content-title-head">
            <h4 class="title"><?php echo (!empty($post['titulo'])) ? $post['titulo'] : '' ?></h4> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <p style="font-size:0.8em"><i class="fas fa-calendar-check text-orange"></i> <?php echo (!empty($post['data'])) ? $this->formatDataViewComplete($post['data']) : '' ?>  | <i class="fas fa-bookmark text-orange"></i> <?php echo (!empty($post['categoria'])) ? $post['categoria'] : '' ?>  </p>
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
            <hr/>
            <div class="fb-comments" data-href="https://joabtorres.com.br/post/index/<?php echo (!empty($post['id'])) ? md5($post['id']) : '' ?>" data-width="100%" data-numposts="5"></div>
        </div>
    </div>
</div>