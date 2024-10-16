<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
//use app\models\service\Service;
use app\models\service\UtilService;

use stdClass;

class UtilController extends Controller
{
	public function buscarPessoa()
	{
		//imprimir($_POST);
		header('Content-Type: application/json');

		$dados = new stdClass;
		$dados->pesq_cpf_cnpj = $_POST['pesq_cpf_cnpj'];
		$dados->pesq_email = $_POST['pesq_email'];
		$dados->tabela = $_POST['tabela'];

		$retorno = new stdClass;

		try {
			$resultado = UtilService::buscarPessoa($dados);

			if ($resultado->pessoa) {
				$retorno->achou = "S";
			} else {
				$retorno->achou = "N";
			}

			$retorno->tem_erro = false;
			$retorno->retorno = $resultado;
			echo json_encode($retorno);
		} catch (\Throwable $th) {
			$retorno->tem_erro = true;
			$retorno->retorno = null;
			$retorno->erro = $th->getMessage();
			echo json_encode($retorno);
		}
	}

	public function buscarcnpj($cnpj)
	{
		//imprimir($cnpj);
		header('Content-Type: application/json');
		
		$retorno = new stdClass;

		try {
			$empresa = UtilService::buscarCNPJ($cnpj);
			$retorno->tem_erro = false;
			$retorno->retorno = $empresa;
			echo json_encode($retorno);
		} catch (\Throwable $th) {
			$retorno->tem_erro = true;
			$retorno->erro = $th->getMessage();
			echo json_encode($retorno);
		}
	}
}