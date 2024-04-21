/* $url = isset($_GET['url']) ? $_GET['url']: null;
         $url = rtrim($url, '/');
         $url = explode('/', $url);

         echo $url[0];
         cuando se ingresa sin definir controlador
         if(empty($url[0])){
             $archivoController = 'controllers/main.php';
             require_once $archivoController;
             $controller = new Main();
         }
         $archivoController = 'controllers/' . $url[0] . '.php';

         if(file_exists($archivoController)){
             require_once $archivoController;

             // inicializar controlador
             $controller = new $url[0];
            
         }else{
             $controller = new Errores();
         } */