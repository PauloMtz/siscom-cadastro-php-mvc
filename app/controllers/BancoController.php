<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\BancoService;
use app\models\service\Service;

use stdClass;

class BancoController extends Controller
{  
    
   public function index()
   {  
       $dados["lista"]      = Service::lista("banco");     
       $dados["view"]       = "Cadastro/Banco/Index";
	   $this->load("template", $dados);
   }

   public function salvar()
   {
      // recebe os dados do formulário e monta objeto
      $obj = new stdClass;

      // pega o id da banco, se tiver
      $obj->id_banco = $_POST['id_banco'] ? $_POST['id_banco'] : null;
      $obj->codigo = $_POST['codigo'];
      $obj->banco = $_POST['banco'];

      //imprimir($obj);

      // grava no banco
      BancoService::salvar($obj, "id_banco", "banco");

      // redireciona
      $this->redirect(URL_BASE . "banco");
   }

   public function edit($id_banco)
   {  
     $dados["banco"]      = Service::get("banco", "id_banco", $id_banco);
     $dados["lista"]          = Service::lista("banco");       
     $dados["view"]           = "Cadastro/Banco/Index";
     $this->load("template", $dados);
   }

   public function excluir($id_banco)
   {  
     Service::excluir("banco", "id_banco", $id_banco);
     $this->redirect(URL_BASE . "banco");
   }  
}
