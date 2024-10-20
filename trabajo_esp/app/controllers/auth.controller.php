<?php

include_once './app/models/user.model.php';
include_once './app/views/auth.view.php';

class AuthController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function showLogin() {

        // muestro el login
        return $this->view->showLogin();
    
    }

    public function login() {
        if (!isset($_POST['email']) || empty($_POST['email'])) {
            return $this->view->showLogin('Falta completar el nombre de usuario');
        }
    
        if (!isset($_POST['password']) || empty($_POST['password'])) {
            return $this->view->showLogin('Falta completar la contraseña');
        }
    
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Verificar que el usuario está en la base de datos
        $userFromDB = $this->model->getUserByEmail($email);

        // password: 123456
        // $userFromDB->password: $2y$10$xQop0wF1YJ/dKhZcWDqHceUM96S04u73zGeJtU80a1GmM.H5H0EHC
        if($userFromDB && password_verify($password, $userFromDB->password)){
            // Guardo en la sesión el ID del usuario
            session_start();
            $_SESSION['ID_USER'] = $userFromDB->id;
            $_SESSION['EMAIL_USER'] = $userFromDB->email;
            $_SESSION['LAST_ACTIVITY'] = time();
    
            // Redirijo al home
            header('Location: ' . BASE_URL . '');
        } else {
            return $this->view->showLogin('Credenciales incorrectas');
        }
    }

}