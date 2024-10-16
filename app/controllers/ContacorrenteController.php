<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ContaCorrenteService;
use app\models\service\Service;

use stdClass;

class ContacorrenteController extends Controller
{  
   public function index()
   {  
      $dados["contacorrente"]  = Flash::getForm();        
       $dados["lista"]      = Service::lista("conta_corrente");     
       $dados["bancos"]     = Service::lista("banco");     
       $dados["tipos"]      = Service::lista("tipo_conta_corrente");       
       $dados["view"]       = "Cadastro/ContaCorrente/Index";
	   $this->load("template", $dados);
   }
}
