<?php

class usuarioController extends usuario{

    public function __construct()
    {
        Security::verifyUser();

    }

    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/usuario/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/usuario/crear.php';
        require_once 'views/layouts/footer.php';
    }

    public function store(){
        
        $url_path = 'assets/imgs' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        echo parent::register($_POST) ? header('location:?controller=usuario') : 'Error en el registro';

        
    }

}