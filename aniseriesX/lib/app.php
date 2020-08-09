 <?php 
    require_once 'controllers/error.php';

    class App {
        function __construct() {
            $url = isset($_GET['url']) ? $_GET['url'] : null; //obteniendo URL por variable GET  isset($_GET['url']) ? $_GET['url']: null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if(empty($url[0])) {
                $ruta = 'controllers/main.php';
                require_once $ruta;
                $controller = new Main();
                $controller->loadModel('main');
                return false;
            }


            $ruta = 'controllers/' . $url[0] . '.php';     

            if(file_exists($ruta)){
                require_once $ruta;
                $controller = new $url[0];

                $controller->loadModel($url[0]);
            }else{
                $controller = new Errores();
            }

        }
    }

?>