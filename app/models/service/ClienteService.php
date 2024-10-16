<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\PessoaDao;
use app\models\validacao\PessoaValidacao;
use app\models\validacao\ClienteValidacao;

class ClienteService
{       
    public static function salvar($pessoa, $cliente)
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

        $cliente->id_pessoa = $pessoa->id_pessoa;

        $validacaoCliente = ClienteValidacao::salvar($cliente);

        if (count($validacaoCliente->listaErros()) > 0) {
            Flash::setErro($validacaoCliente->listaErros());
            return false;
        }

        if ($cliente->id_cliente) {
            Service::editar(objToArray($cliente), "id_cliente", "cliente");
        } else {
            Service::inserir(objToArray($cliente), "cliente");
        }

        return true;
    }

    public static function lista()
    {
        $dao = new PessoaDao;
        return $dao->listaCliente();
    }

    public static function getCliente($id_cliente)
    {
        $dao = new PessoaDao;
        return $dao->getCliente($id_cliente);
    }
}
