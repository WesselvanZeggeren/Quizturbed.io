<?php

class Home extends Controller
{
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function quizterber()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/quizturber.php';
        require APP . 'view/_templates/footer.php';
    }

    public function about()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/about.php';
        require APP . 'view/_templates/footer.php';
    }
}
