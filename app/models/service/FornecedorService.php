<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\PessoaDao;
use app\models\validacao\PessoaValidacao;
use app\models\validacao\FornecedorValidacao;

class FornecedorService
{       
    public static function salvar($pessoa, $fornecedor)
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

        $fornecedor->id_pessoa = $pessoa->id_pessoa;

        $validacaoFornecedor = FornecedorValidacao::salvar($fornecedor);

        if (count($validacaoFornecedor->listaErros()) > 0) {
            Flash::setErro($validacaoFornecedor->listaErros());
            return false;
        }

        if ($fornecedor->id_fornecedor) {
            Service::editar(objToArray($fornecedor), "id_fornecedor", "fornecedor");
        } else {
            Service::inserir(objToArray($fornecedor), "fornecedor");
        }

        return true;
    }

    public static function lista()
    {
        $dao = new PessoaDao;
        return $dao->listaFornecedor();
    }

    public static function getFornecedor($id_fornecedor)
    {
        $dao = new PessoaDao;
        return $dao->getFornecedor($id_fornecedor);
    }
}
