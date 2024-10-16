<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;

use stdClass;

class StatusController extends Controller
{  
    
   public function index()
   {  
       $dados["lista"]      = Service::lista("status");     
       $dados["view"]       = "Cadastro/Status/Index";
	   $this->load("template", $dados);
   }
   
   public function gerar()
   {
      $arquivo = "./config/constantes.php";

      //Service::limparTabela("status");

      if (file_exists($arquivo)) {
         $constantes = include $arquivo;
         foreach($constantes["status"] as $chave => $valor) {
            $obj = new stdClass;
            $obj->id_status = $valor;
            $obj->status = $chave;
            $obj->descricao = formatarConstante($chave);
            $chaveExists = Service::get("status", "status", $chave);

            if (!$chaveExists) {
               Service::inserir(objToArray($obj), "status");
            }
         }
      }

      $this->redirect(URL_BASE . "status");
   }

   public function comparar($id_status)
   {
      if ($id_status == config("constantes.status.PRONTO_PARA_COTAR")) {
         echo "igual";
      } else {
         echo "diferente";
      }
   }
}
