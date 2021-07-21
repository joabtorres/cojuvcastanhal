<?php
class fotoController extends controller {

    public function index($page = 1) {
        $view = "noticias/foto";
        $dados = array();
        $crud = new crud_db();
        $dados = array();
        $dados['genero'] = 'foto';
        $arraySearch = array();
        $sql = "SELECT p.*, c.nome as categoria, u.nome FROM post AS p INNER JOIN categoria as c INNER JOIN usuario as u WHERE p.id_categoria=c.id AND  p.id_usuario=u.id AND p.status=1 AND p.genero='foto'";
        $parametros = "";
        if (isset($_GET['nBuscarBT'])) {
            $parametros ="?nTitulo=" . $_GET['nTitulo'] . "&nBuscarBT=BuscarBT";
            //nTitulo
            if (!empty($_GET['nTitulo'])) {
                $sql = $sql . " AND titulo LIKE :titulo ";
                $arraySearch['titulo'] = "%" . $_GET['nTitulo'] . "%";
            }
            //paginacao
            $limite = 15;
            $total_registro = $crud->read($sql, $arraySearch);
            $total_registro = is_array($total_registro) ? count($total_registro) : 1;
            $paginas = $total_registro / $limite;
            $indice = 0;
            $pagina_atual = (isset($page) && !empty($page)) ? addslashes($page) : 1;
            $indice = ($pagina_atual - 1) * $limite;
            $dados["paginas"] = $paginas;
            $dados["pagina_atual"] = $pagina_atual;
            $dados['metodo_buscar'] = $parametros;
            $sql .= " ORDER BY p.id DESC LIMIT $indice,$limite ";

            $dados['posts'] = $crud->read($sql, $arraySearch);
        } else {
            //paginacao
            $limite = 15;
            $total_registro = $crud->read($sql);
            $total_registro = is_array($total_registro) ? count($total_registro) : 1;
            $paginas = $total_registro / $limite;
            $indice = 0;
            $pagina_atual = (isset($page) && !empty($page)) ? addslashes($page) : 1;
            $indice = ($pagina_atual - 1) * $limite;
            $dados["paginas"] = $paginas;
            $dados["pagina_atual"] = $pagina_atual;
            $dados['metodo_buscar'] = $parametros;
            $sql .= " ORDER BY p.id DESC LIMIT $indice,$limite ";

            $dados['posts'] = $crud->read($sql);
        }
        $this->loadTemplate($view, $dados);
    }

    public function post($id = null) {
        if (empty($id)) {
            $url = "location: " . BASE_URL . '/home';
            header($url);
        }
        $view = "noticias/post";
        $dados = array();
        $crudModel = new crud_db();
        $sql = "SELECT p.*, c.nome as categoria, u.nome FROM post AS p INNER JOIN categoria as c INNER JOIN usuario as u WHERE p.id_categoria=c.id AND  p.id_usuario=u.id AND md5(p.id)=:id";
        $post = $crudModel->read_specific($sql, array('id' => $id));
        if (is_array($post)) {
            $imgs_grande = $crudModel->read("SELECT * FROM post_img where id_post=:id", array('id' => $post['id']));
            $imgs_min = $crudModel->read("SELECT * FROM post_img_min where id_post=:id", array('id' => $post['id']));
            if (is_array($imgs_min) && is_array($imgs_grande)) {
                foreach ($imgs_grande as $key => $value) {
                    $post['imagens'][$key]['grande'] = $value['imagem'];
                }
                foreach ($imgs_min as $key => $value) {
                    $post['imagens'][$key]['min'] = $value['imagem'];
                }
            }
        }
        $dados['post'] = $post;
        $this->loadTemplate($view, $dados);
    }

}
