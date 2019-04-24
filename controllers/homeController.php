<?php

    class homeController extends Controller {
        private $user;

        public function __construct() {
            // parent::__construct();

            $this -> user = new users;
            if(!$this -> user -> verifyLogin()) {
                header("Location: " . BASE_URL . "login");
                exit;
            }
        }

        public function index() {
            $data = array();

            $this -> loadView("home", $data);
        }

    }