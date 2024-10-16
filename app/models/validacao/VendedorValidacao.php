<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class VendedorValidacao
{
	public static function salvar($vendedor)
	{
		$validacao = new Validacao();
		$validacao->setData("id_pessoa", $vendedor->id_pessoa);
		$validacao->getData("id_pessoa")->isVazio();

		if ($vendedor->id_pessoa) {
			$existeVendedor = Service::get("vendedor", "id_pessoa", $vendedor->id_pessoa);

			if ($existeVendedor && $vendedor->id_vendedor != $existeVendedor->id_vendedor) {
				$validacao->getData("id_pessoa")->isUnico(1, "Já existe um vendedor cadastrado com esses dados");
			}
		}

		return $validacao;
	}
}