<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Home
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Home
{

    public function index()
    {
        
        $home = new \Sts\Models\StsHome();
        $home->index();
        
        $carregarView = new \Core\ConfigView("sts/Views/home/home");
        $carregarView->renderizar();
    }

}
