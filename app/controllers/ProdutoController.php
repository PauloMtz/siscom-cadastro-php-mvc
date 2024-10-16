<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ProdutoService;
use app\models\service\Service;

class ProdutoController extends Controller
{  

   public function index()
   {  
       $dados["lista"]      = Service::lista("produto");     
       $dados["view"]       = "Cadastro/Produto/Index";
       $this->load("template", $dados);
   } 

   public function create()
   {
        $dados["categorias"]  = Service::lista("categoria"); 
        $dados["unidades"]    = Service::lista("unidade"); 
        $dados["produtoJs"]   = true;
        $dados["categoriaJs"] = true;

        $dados["view"]       = "Cadastro/Produto/Create";
        $this->load("template", $dados);
    }
}
