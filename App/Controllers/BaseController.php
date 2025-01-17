<?php

namespace App\Controllers;

use App\Services\TwigService;

class BaseController
{
    protected $twig;

    public function __construct()
    {
        $twigService = new TwigService();
        $this->twig = $twigService->getTwig();
    }

    protected function render(string $template, array $data = []): void
    {
        echo $this->twig->render($template, $data);
    }
}
