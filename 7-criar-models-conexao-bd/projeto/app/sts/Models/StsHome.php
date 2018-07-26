<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsHome
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsHome
{
    public function index()
    {
        echo "Listar Dados <br>";
        $conexao = new \Sts\Models\helper\StsConn();
        $conexao->getConn();
    }
}
