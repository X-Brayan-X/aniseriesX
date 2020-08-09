<?php
    class Anime extends Controller {
        function __construct() {
            parent::__construct();
            $this->view->render('anime/index');

        }
    }
?>