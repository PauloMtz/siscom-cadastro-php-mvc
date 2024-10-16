<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\FornecedorService;
use app\models\service\Service;

use stdClass;

class FornecedorController extends Controller
{
   public function index()
   {
      $dados["lista"]      = FornecedorService::lista();       
      $dados["view"]       = "Cadastro/Fornecedor/Index";
	   $this->load("template", $dados);
   }

   public function create()
   {
      $dados["fornecedor"]    = Flash::getForm();
      $dados["view"]       = "Cadastro/Fornecedor/Create";
      $this->load("template", $dados);
   }

   public function edit($id_fornecedor)
   {
      $dados["fornecedor"]    = FornecedorService::getFornecedor($id_fornecedor);
      $dados["view"]       = "Cadastro/Fornecedor/Create";
      $this->load("template", $dados);
   }

   public function excluir($id_fornecedor)
   {
      Service::excluir("fornecedor", "id_fornecedor", $id_fornecedor);
      $this->redirect(URL_BASE . "fornecedor");
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

      $objFornecedor = new stdClass;
      $objFornecedor->id_fornecedor = $_POST['id_fornecedor'] ? $_POST['id_fornecedor'] : null;
      $objFornecedor->id_pessoa = $objPessoa->id_pessoa;

      if (FornecedorService::salvar($objPessoa, $objFornecedor)) {
         Flash::limpaForm();
         $this->redirect(URL_BASE . "fornecedor");
      } else {
         if (!$objFornecedor->id_fornecedor) {
            $this->redirect(URL_BASE . "fornecedor/create");
         } else {
            $this->redirect(URL_BASE . "fornecedor/edit/" . $objFornecedor->id_fornecedor);
         }
      }
   }
}
