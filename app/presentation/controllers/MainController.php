<?php
class MainController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('mainView');
        echo "<p>Main Controller</p>";
    }

    public function saludo()
    {
        echo "<p>Saludo al curso</p>";
    }
}
