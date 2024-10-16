<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class UnidadeValidacao
{
	public static function salvar($unidade)
	{
		$validacao = new Validacao();
		$validacao->setData("abrev", $unidade->abrev);
		$validacao->setData("unidade", $unidade->unidade);

		$validacao->getData("abrev")->isVazio();
		$validacao->getData("unidade")->isVazio();

		if ($unidade->unidade) {
			$existeunidade = Service::get("unidade", "abrev", $unidade->abrev);

			if ($existeunidade && $existeunidade->id_unidade != $unidade->id_unidade) {
				$validacao->getData("abrev")->isUnico(1);
			}
		}

		return $validacao;
	}
}