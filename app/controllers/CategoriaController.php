<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\CategoriaService;
use app\models\service\Service;

use stdClass;

class CategoriaController extends Controller
{  

   public function index()
   {  
     $dados["lista"]      = Service::lista("categoria");      
     $dados["view"]       = "Cadastro/Categoria/Index";
     $this->load("template", $dados);
   }

   public function salvar()
   {
      // recebe os dados do formulário e monta objeto
      $obj = new stdClass;

      // pega o id da categoria, se tiver
      $obj->id_categoria = $_POST['id_categoria'] ? $_POST['id_categoria'] : null;
      $obj->categoria = $_POST['categoria'];

      //imprimir($obj);

      // grava no banco
      CategoriaService::salvar($obj, "id_categoria", "categoria");

      // redireciona
      $this->redirect(URL_BASE . "categoria");
   }

   public function edit($id_categoria)
   {  
     $dados["categoria"]      = Service::get("categoria", "id_categoria", $id_categoria);
     $dados["lista"]          = Service::lista("categoria");       
     $dados["view"]           = "Cadastro/Categoria/Index";
     $this->load("template", $dados);
   }

   public function excluir($id_categoria)
   {  
     Service::excluir("categoria", "id_categoria", $id_categoria);
     $this->redirect(URL_BASE . "categoria");
   }
}
