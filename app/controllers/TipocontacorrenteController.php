<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;
use app\models\service\TipoContaCorrenteService;

use stdClass;

class TipocontacorrenteController extends Controller
{  
    
   public function index()
   {  
       $dados["lista"]      = Service::lista("tipo_conta_corrente");     
       $dados["view"]       = "Cadastro/TipoContaCorrente/Index";
	   $this->load("template", $dados);
   }

   public function salvar()
   {
      // recebe os dados do formulário e monta objeto
      $obj = new stdClass;

      // pega o id da tipo_conta_corrente, se tiver
      $obj->id_tipo_conta_corrente = $_POST['id_tipo_conta_corrente'] ? $_POST['id_tipo_conta_corrente'] : null;
      $obj->tipo_conta_corrente = $_POST['tipo_conta_corrente'];

      //imprimir($obj);

      // grava no banco
      TipoContaCorrenteService::salvar($obj, "id_tipo_conta_corrente", "tipo_conta_corrente");

      // redireciona
      $this->redirect(URL_BASE . "tipocontacorrente");
   }

   public function edit($id_tipo_conta_corrente)
   {  
     $dados["tipocontacorrente"]      = Service::get("tipo_conta_corrente", "id_tipo_conta_corrente", $id_tipo_conta_corrente);
     $dados["lista"]          = Service::lista("tipo_conta_corrente");       
     $dados["view"]           = "Cadastro/TipoContaCorrente/Index";
     $this->load("template", $dados);
   }

   public function excluir($id_tipo_conta_corrente)
   {  
     Service::excluir("tipo_conta_corrente", "id_tipo_conta_corrente", $id_tipo_conta_corrente);
     $this->redirect(URL_BASE . "tipocontacorrente");
   }
}
