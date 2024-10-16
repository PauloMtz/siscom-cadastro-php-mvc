<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\TransportadoraService;
use app\models\service\Service;

use stdClass;

class TransportadoraController extends Controller
{
  public function index()
  {
    $dados["lista"]      = TransportadoraService::lista();       
    $dados["view"]       = "Cadastro/Transportadora/Index";
    $this->load("template", $dados);
  }

  public function create()
  {
    $dados["transportadora"]    = Flash::getForm();
    $dados["view"]       = "Cadastro/Transportadora/Create";
    $this->load("template", $dados);
  }

  public function edit($id_transportadora)
  {
    $dados["transportadora"]    = TransportadoraService::getTransportadora($id_transportadora);
    $dados["view"]       = "Cadastro/transportadora/Create";
    $this->load("template", $dados);
  }

  public function excluir($id_transportadora)
  {
    Service::excluir("transportadora", "id_transportadora", $id_transportadora);
    $this->redirect(URL_BASE . "transportadora");
  }

  public function salvar()
  {
    $objPessoa = new stdClass;
    $objPessoa->id_pessoa         = $_POST['id_pessoa'] ? $_POST['id_pessoa'] : null;
    $objPessoa->cpf_cnpj          = tira_mascara($_POST['cpf_cnpj']);
    $objPessoa->nome_razao_social = $_POST['nome_razao_social'];
    $objPessoa->tipo_pessoa       = $_POST['tipo_pessoa'];
    $objPessoa->telefone          = $_POST['telefone'];
    $objPessoa->email             = $_POST['email'];
    $objPessoa->apelido_fantasia  = $_POST['apelido_fantasia'];
    $objPessoa->logradouro        = $_POST['logradouro'];
    $objPessoa->numero            = $_POST['numero'];
    $objPessoa->complemento       = $_POST['complemento'];
    $objPessoa->bairro            = $_POST['bairro'];
    $objPessoa->cidade            = $_POST['cidade'];
    $objPessoa->uf                = $_POST['uf'];
    $objPessoa->cep               = $_POST['cep'];
    $objPessoa->ibge              = $_POST['ibge'];
    Flash::setForm($objPessoa);

    if (!$objPessoa->id_pessoa) {

      if ($objPessoa->cpf_cnpj) {
        $existePessoa = Service::get("pessoa", "cpf_cnpj", $objPessoa->cpf_cnpj);

        if (!$existePessoa) {
          $existePessoa = Service::get("pessoa", "email", $objPessoa->email);
        }

        $objPessoa->id_pessoa = $existePessoa->id_pessoa ?? null;
      }
    }

    $objTransportadora = new stdClass;
    $objTransportadora->id_transportadora = $_POST['id_transportadora'] ? $_POST['
    id_transportadora'] : null;
    $objTransportadora->id_pessoa = $objPessoa->id_pessoa;
    //$objTransportadora->limite_credito = getFloat($_POST['limite_credito']);

    if (TransportadoraService::salvar($objPessoa, $objTransportadora)) {
      Flash::limpaForm();
      $this->redirect(URL_BASE . "transportadora");
    } else {
      if (!$objTransportadora->id_transportadora) {
        $this->redirect(URL_BASE . "transportadora/create");
    } else {
        $this->redirect(URL_BASE . "transportadora/edit/" . $objTransportadora->id_transportadora);
      }
    }
  }
}
