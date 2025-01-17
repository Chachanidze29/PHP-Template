<?php

namespace App\Services;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigService
{
    private Environment $twig;

    public function __construct()
    {
        $appDir = $_SERVER['DOCUMENT_ROOT'].'/../App';
        $loader = new FilesystemLoader($appDir.'/views');

        $this->twig = new Environment($loader, [
            'cache' => $appDir.'/storage/cache/twig',
            'debug' => true
        ]);
    }

    public function getTwig(): Environment
    {
        return $this->twig;
    }
}
