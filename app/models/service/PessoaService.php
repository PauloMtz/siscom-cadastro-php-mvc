<?php

namespace app\models\service;

//use app\core\Flash;
use app\models\dao\PessoaDao;

class PessoaService
{       
    public static function buscarPessoa($dados)
    {
        $dao = new PessoaDao;

        return $dao->buscarPessoa($dados);
    }
}
