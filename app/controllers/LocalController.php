<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\LocalArmazenamentoService;
use app\models\service\Service;

use stdClass;

class LocalController extends Controller
{  
    
   public function index()
   {  
       $dados["lista"]      = Service::lista("local_armazenamento");      
       $dados["view"]       = "Cadastro/Local/Index";
	   $this->load("template", $dados);
   }

   public function salvar()
   {
      // recebe os dados do formulário e monta objeto
      $obj = new stdClass;

      // pega o id da local_armazenamento, se tiver
      $obj->id_local = $_POST['id_local'] ? $_POST['id_local'] : null;
      $obj->nome = $_POST['nome'];

      //imprimir($obj);

      // grava no banco
      LocalArmazenamentoService::salvar($obj, "id_local", "local_armazenamento");

      // redireciona
      $this->redirect(URL_BASE . "local");
   }

   public function edit($id_local)
   {  
     $dados["local"]      = Service::get("local_armazenamento", "id_local", $id_local);
     $dados["lista"]          = Service::lista("local_armazenamento");       
     $dados["view"]           = "Cadastro/Local/Index";
     $this->load("template", $dados);
   }

   public function excluir($id_local)
   {  
     Service::excluir("local_armazenamento", "id_local", $id_local);
     $this->redirect(URL_BASE . "local");
   }
}
