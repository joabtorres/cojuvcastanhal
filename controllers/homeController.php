<?php

/**
 * A classe 'homeController' é responsável para fazer o carregamento da página home do sistema
 * 
 * @author Joab Torres <joabtorres1508@gmail.com>
 * @version 1.0
 * @copyright  (c) 2019, Joab Torres Alencar - Analista de Sistemas 
 * @access public
 * @package controllers
 * @example classe homeController
 */
class homeController extends controller {

    /**
     * Está função pertence a uma action do controle MVC, ela é responśavel por carrega a view  presente no diretorio views/home.php, desde que o usuário esteja logado no sistema
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function index() {
        $view = "home";
        $dados = array();
        $crud = new crud_db();
        $sql = "SELECT p.*, c.nome as categoria, u.nome FROM post AS p INNER JOIN categoria as c INNER JOIN usuario as u WHERE p.id_categoria=c.id AND p.id_usuario=u.id AND p.status=1 ORDER BY p.id DESC LIMIT 0,3";
        $dados['posts'] = $crud->read($sql);

        $this->loadTemplate($view, $dados);
    }

}
