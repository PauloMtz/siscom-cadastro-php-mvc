<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class CategoriaValidacao
{
	public static function salvar($categoria)
	{
		$validacao = new Validacao();
		$validacao->setData("categoria", $categoria->categoria);
		$validacao->getData("categoria")->isVazio();

		if ($categoria->categoria) {
			$existeCategoria = Service::get("categoria", "categoria", $categoria->categoria);

			if ($existeCategoria && $existeCategoria->id_categoria != $categoria->id_categoria) {
				$validacao->getData("categoria")->isUnico(1);
			}
		}

		return $validacao;
	}
}