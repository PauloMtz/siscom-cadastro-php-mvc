<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class FornecedorValidacao
{
	public static function salvar($fornecedor)
	{
		$validacao = new Validacao();
		$validacao->setData("id_pessoa", $fornecedor->id_pessoa);
		$validacao->getData("id_pessoa")->isVazio();

		if ($fornecedor->id_pessoa) {
			$existeFornecedor = Service::get("fornecedor", "id_pessoa", $fornecedor->id_pessoa);

			if ($existeFornecedor && $fornecedor->id_fornecedor != $existeFornecedor->id_fornecedor) {
				$validacao->getData("id_pessoa")->isUnico(1, "Já existe um fornecedor cadastrado com esses dados");
			}
		}

		return $validacao;
	}
}