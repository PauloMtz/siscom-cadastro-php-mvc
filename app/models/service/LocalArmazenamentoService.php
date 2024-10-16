<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\Dao;
use app\models\validacao\LocalArmazenamentoValidacao;

class LocalArmazenamentoService
{       
    public static function salvar($local, $campo, $tabela)
    {
        $validacao = LocalArmazenamentoValidacao::salvar($local);

        return Service::salvar($local, $campo, $validacao->listaErros(), $tabela);
    }
}