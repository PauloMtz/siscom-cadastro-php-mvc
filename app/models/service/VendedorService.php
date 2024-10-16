<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\PessoaDao;
use app\models\validacao\PessoaValidacao;
use app\models\validacao\VendedorValidacao;

class VendedorService
{       
    public static function salvar($pessoa, $vendedor)
    {
        $validacaoPessoa = PessoaValidacao::salvar($pessoa);

        if (count($validacaoPessoa->listaErros()) > 0) {
            Flash::setErro($validacaoPessoa->listaErros());
            return false;
        }

        if ($pessoa->id_pessoa) {
            Service::editar(objToArray($pessoa), "id_pessoa", "pessoa");
        } else {
            $pessoa->id_pessoa = Service::inserir(objToArray($pessoa), "pessoa");
        }

        $vendedor->id_pessoa = $pessoa->id_pessoa;

        $validacaoVendedor = VendedorValidacao::salvar($vendedor);

        if (count($validacaoVendedor->listaErros()) > 0) {
            Flash::setErro($validacaoVendedor->listaErros());
            return false;
        }

        if ($vendedor->id_vendedor) {
            Service::editar(objToArray($vendedor), "id_vendedor", "vendedor");
        } else {
            Service::inserir(objToArray($vendedor), "vendedor");
        }

        return true;
    }

    public static function lista()
    {
        $dao = new PessoaDao;
        return $dao->listaVendedor();
    }

    public static function getVendedor($id_vendedor)
    {
        $dao = new PessoaDao;
        return $dao->getVendedor($id_vendedor);
    }
}
