<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\PessoaDao;
use app\models\validacao\PessoaValidacao;
use app\models\validacao\TransportadoraValidacao;

class TransportadoraService
{       
    public static function salvar($pessoa, $transportadora)
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

        $transportadora->id_pessoa = $pessoa->id_pessoa;

        $validacaoTransportadora = TransportadoraValidacao::salvar($transportadora);

        if (count($validacaoTransportadora->listaErros()) > 0) {
            Flash::setErro($validacaoTransportadora->listaErros());
            return false;
        }

        if ($transportadora->id_transportadora) {
            Service::editar(objToArray($transportadora), "id_transportadora", "transportadora");
        } else {
            Service::inserir(objToArray($transportadora), "transportadora");
        }

        return true;
    }

    public static function lista()
    {
        $dao = new PessoaDao;
        return $dao->listaTransportadora();
    }

    public static function getTransportadora($id_transportadora)
    {
        $dao = new PessoaDao;
        return $dao->getTransportadora($id_transportadora);
    }
}
