<?php

class userController extends User{
    //Mostrar toda la informacion

    public function __construct()
    {
        Security::verifyUser();

    }

    public function index(){                
        require_once 'views/layouts/header3.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header3.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location:?controller=user') : 'Error ';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        echo parent::update_register($_POST) ? header('location:?controller=user') : 'Error ';

    }


    //
    public function delete(){
        var_dump(parent::delete_register($_GET));

        echo parent::delete_register($_GET) ? header('location:?controller=user') : 'Error ';


    }

}