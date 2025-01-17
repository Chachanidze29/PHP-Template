<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): void
    {
        $data = [
            'title' => 'Welcome to My App',
            'content' => 'This is a simple example of using Twig.'
        ];

        $this->render('home.twig', $data);
    }
}
