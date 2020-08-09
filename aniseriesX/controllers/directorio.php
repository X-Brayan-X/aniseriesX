<?php
    class Directorio extends Controller {
        function __construct() {
            parent::__construct();
            $this->view->render('directorio/index');

        }
    }
?>