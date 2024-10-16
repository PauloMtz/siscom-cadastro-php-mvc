<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\Dao;
use app\models\validacao\BancoValidacao;

class BancoService
{       
    public static function salvar($banco, $campo, $tabela)
    {
        $validacao = BancoValidacao::salvar($banco);

        return Service::salvar($banco, $campo, $validacao->listaErros(), $tabela);
    }
}
