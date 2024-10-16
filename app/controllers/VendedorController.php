<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\VendedorService;
use app\models\service\Service;

use stdClass;

class VendedorController extends Controller
{
  public function index()
  {
    $dados["lista"]      = VendedorService::lista();       
    $dados["view"]       = "Cadastro/Vendedor/Index";
    $this->load("template", $dados);
  } 

  public function create()
  {
    $dados["vendedor"]    = Flash::getForm();
    $dados["view"]       = "Cadastro/Vendedor/Create";
    $this->load("template", $dados);
  }

  public function edit($id_vendedor)
   {
      $dados["vendedor"]    = VendedorService::getVendedor($id_vendedor);
      $dados["view"]       = "Cadastro/vendedor/Create";
      $this->load("template", $dados);
   }

   public function excluir($id_vendedor)
   {
      Service::excluir("vendedor", "id_vendedor", $id_vendedor);
      $this->redirect(URL_BASE . "vendedor");
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

      $objVendedor = new stdClass;
      $objVendedor->id_vendedor = $_POST['id_vendedor'] ? $_POST['id_vendedor'] : null;
      $objVendedor->id_pessoa = $objPessoa->id_pessoa;

      if (VendedorService::salvar($objPessoa, $objVendedor)) {
         Flash::limpaForm();
         $this->redirect(URL_BASE . "vendedor");
      } else {
         if (!$objVendedor->id_vendedor) {
            $this->redirect(URL_BASE . "vendedor/create");
         } else {
            $this->redirect(URL_BASE . "vendedor/edit/" . $objVendedor->id_vendedor);
         }
      }
   }
}
