<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ClienteService;
use app\models\service\Service;

use stdClass;

class ClienteController extends Controller
{  
    public function index()
    {  
        $dados["lista"]      = ClienteService::lista("pessoa");
        $dados["view"]       = "Cadastro/Cliente/Index";
        $this->load("template", $dados);
    }

    public function create()
    {
        $dados["cliente"]    = Flash::getForm();
        $dados["view"]       = "Cadastro/Cliente/Create";
        $this->load("template", $dados);
    }

    public function edit($id_cliente)
    {
        $dados["cliente"]    = ClienteService::getCliente($id_cliente);
        $dados["view"]       = "Cadastro/Cliente/Create";
        $this->load("template", $dados);
    }

    public function excluir($id_cliente)
    {
        Service::excluir("cliente", "id_cliente", $id_cliente);
        $this->redirect(URL_BASE . "cliente");
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

        $objCliente = new stdClass;
        $objCliente->id_cliente = $_POST['id_cliente'] ? $_POST['id_cliente'] : null;
        $objCliente->id_pessoa = $objPessoa->id_pessoa;
        $objCliente->limite_credito = getFloat($_POST['limite_credito']);

        if (ClienteService::salvar($objPessoa, $objCliente)) {
            Flash::limpaForm();
            $this->redirect(URL_BASE . "cliente");
        } else {
            if (!$objCliente->id_cliente) {
                $this->redirect(URL_BASE . "cliente/create");
            } else {
                $this->redirect(URL_BASE . "cliente/edit/" . $objCliente->id_cliente);
            }
        }
    }
}
