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
        //echo "Listar Dados <br>";
        //$conexao = new \Sts\Models\helper\StsConn();
        //$conexao->getConn();
        $listar = new \Sts\Models\helper\StsRead();
        $listar->exeRead('sts_carousels', 'WHERE adms_situacoe_id =:adms_situacoe_id LIMIT :limit', 'adms_situacoe_id=1&limit=4');
    }
}
