<?php
class View
{
    public function __contruct()
    {
        echo "<p>Vista Base</p>";
    }

    public function render($viewsName)
    {   
        require 'app/presentation/views/' . $viewsName . '.php';
    }
}
