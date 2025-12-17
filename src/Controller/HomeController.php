<?php

namespace App\Controller;



class HomeController
{
    public function index(): void
    {
        require ROOT_PATH . '/src/View/Home.php';
    }
}
