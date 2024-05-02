<?php
    include_once 'model/Model.php';

    class Controller {
        public $model;
        public function __construct() {
            $this->model = new Model();
        }

        public function invoke() {
            $rslt = $this->model->login_auth();
            if($rslt == 'login') {
                include 'view/afterlogin.php';
            } else {
                include 'view/login.php';
            }
        }
    }