<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\Dao;
use app\models\validacao\TipoContaCorrenteValidacao;

class TipoContaCorrenteService
{       
    public static function salvar($tipo_conta_corrente, $campo, $tabela)
    {
        $validacao = TipoContaCorrenteValidacao::salvar($tipo_conta_corrente);

        return Service::salvar($tipo_conta_corrente, $campo, $validacao->listaErros(), $tabela);
    }
}
