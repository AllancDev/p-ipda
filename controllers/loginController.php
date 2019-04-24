<?php

    /**
     *  Class loginController.php
     * 
     * @author Allan Cristian
     */

     class loginController extends Controller {
         public function index() {
             $data = array(
                 'msg' => ""
             );

             if(!empty($_GET['error'])) {
                 if($_GET['error'] == '1') {
                     $data['msg'] = "Usuário e/ou senha inválidos!";
                 }
             }
                $this -> loadView("login", $data);
             
         }

         public function signin() {
             if(!empty($_POST['email'])) {
                 $email = strtolower($_POST['email']);
                 $password = $_POST['password'];

                 $users = new Users();

                 if($users -> emailValidate($email, $password)) {
                     header("Location: " . BASE_URL);
                     exit;
                 } else {
                     header("Location: " . BASE_URL . "login?error=1");
                     exit;
                 }
             } else {
                 header("Location: " . BASE_URL . "login");
                 exit;
             }
         }

         public function logout() {
            if(isset($_SESSION['ipdahashlogin']) && !empty($_SESSION['ipdahashlogin']) ) {
                $users = new Users();
                $i = $users -> setLoginHash($_SESSION['infogeral']['id'], null);
                if($i) {
                    session_destroy();
                    header("Location: " . BASE_URL . 'login');
                    exit;
                } else {
                    header("Location: " . BASE_URL);
                    exit;
                }

            }
        }
     }