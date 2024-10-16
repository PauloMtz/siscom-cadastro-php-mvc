<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class ClienteValidacao
{
	public static function salvar($cliente)
	{
		$validacao = new Validacao();
		$validacao->setData("id_pessoa", $cliente->id_pessoa);
		$validacao->getData("id_pessoa")->isVazio();

		if ($cliente->id_pessoa) {
			$existeCliente = Service::get("cliente", "id_pessoa", $cliente->id_pessoa);

			if ($existeCliente && $cliente->id_cliente != $existeCliente->id_cliente) {
				$validacao->getData("id_pessoa")->isUnico(1, "Já existe um cliente cadastrado com esses dados");
			}
		}

		return $validacao;
	}
}