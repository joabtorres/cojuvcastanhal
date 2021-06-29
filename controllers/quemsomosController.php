<?php
class quemsomosController extends controller {
    public function index() {
        $view = "quemsomos";
        $dados = array();
        $this->loadTemplate($view, $dados);
    }

}
