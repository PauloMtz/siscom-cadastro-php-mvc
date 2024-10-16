<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\Dao;
use app\models\validacao\CategoriaValidacao;

class CategoriaService
{       
    public static function salvar($categoria, $campo, $tabela)
    {
        $validacao = CategoriaValidacao::salvar($categoria);

        return Service::salvar($categoria, $campo, $validacao->listaErros(), $tabela);
    }
}
