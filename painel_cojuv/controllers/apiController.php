<?php

class apiController extends controller {

    public function feed($id = null) {
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if ($id != null) {
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
            $post['data'] = $this->formatDateViewComplete($post['data']);
            echo json_encode($post, JSON_UNESCAPED_UNICODE);
        } else {
            $url = "location: " . BASE_URL . "home";
            header($url);
        }
    }

}
