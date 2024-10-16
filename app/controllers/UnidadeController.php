<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;
use app\models\service\UnidadeService;

use stdClass;

class UnidadeController extends Controller
{  
    
   public function index()
   {  
       $dados["lista"]      = Service::lista("unidade");     
       $dados["view"]       = "Cadastro/Unidade/Index";
	   $this->load("template", $dados);
   }

   public function salvar()
   {
      // recebe os dados do formulário e monta objeto
      $obj = new stdClass;

      // pega o id da unidade, se tiver
      $obj->id_unidade = $_POST['id_unidade'] ? $_POST['id_unidade'] : null;
      $obj->abrev = $_POST['abrev'];
      $obj->unidade = $_POST['unidade'];

      //imprimir($obj);

      // grava no unidade
      UnidadeService::salvar($obj, "id_unidade", "unidade");

      // redireciona
      $this->redirect(URL_BASE . "unidade");
   }

   public function edit($id_unidade)
   {  
     $dados["unidade"]      = Service::get("unidade", "id_unidade", $id_unidade);
     $dados["lista"]          = Service::lista("unidade");       
     $dados["view"]           = "Cadastro/Unidade/Index";
     $this->load("template", $dados);
   }

   public function excluir($id_unidade)
   {  
     Service::excluir("unidade", "id_unidade", $id_unidade);
     $this->redirect(URL_BASE . "unidade");
   }
}
