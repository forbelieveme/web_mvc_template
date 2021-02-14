<?php
class App
{
    public function __construct()
    {
        echo "<p>Nueva App</p>";

        $url = $_REQUEST['url']; // Se obtiene la ruta restante del url
        $url = rtrim($url, '/'); // Elimina los caractertes '/' del final de la url
        $url = explode('/', $url); // Parte el string en substrings donde encuentre '/'
        var_dump($url);
    }
}
