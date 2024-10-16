<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;

use stdClass;

class FormapagamentoController extends Controller
{  
    
   public function index()
   {  
       $dados["lista"]      = Service::lista("forma_pagamento");     
       $dados["view"]       = "Cadastro/FormaPagamento/Index";
	   $this->load("template", $dados);
   }

   public function gerar()
   {
      $arquivo = "./config/constantes.php";

      //Service::limparTabela("forma_pagamento");

      if (file_exists($arquivo)) {
         $constantes = include $arquivo;
         foreach($constantes["forma_pagto"] as $chave => $valor) {
            $obj = new stdClass;
            $obj->id_forma_pagamento = $valor;
            $obj->forma_pagamento = $chave;
            $obj->descricao = formatarConstante($chave);
            $chaveExists = Service::get("forma_pagamento", "forma_pagamento", $chave);

            if (!$chaveExists) {
               Service::inserir(objToArray($obj), "forma_pagamento");
            }
         }
      }

      $this->redirect(URL_BASE . "formapagamento");
   }
}
