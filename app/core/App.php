<?php
require_once 'app/presentation/controllers/ErrorController.php';

class App
{
    public function __construct()
    {
        echo "<p>Nueva App</p>";

        $url = $_REQUEST['url']; // Se obtiene la ruta restante del url
        $url = rtrim($url, '/'); // Elimina los caractertes '/' del final de la url
        $url = explode('/', $url); // Parte el string en substrings donde encuentre '/'
        // var_dump($url);

        // Construimos la ruta del archivo controlador
        $controllerFile = "app/presentation/controllers/" . $url[0] . ".php";
        var_dump($controllerFile);
        if (file_exists($controllerFile)) { // Si el controlador existe entonces se carga
            require_once $controllerFile;
            $controller = new $url[0]; // Modulo controlador

            if (isset($url[1])) {
                $controller -> {$url[1]}();
            }
        } else {
            $controller = new ErrorController(); // Si no encuentra el controlador se carga el de error
        }
    }
}
