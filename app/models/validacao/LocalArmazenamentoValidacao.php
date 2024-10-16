<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class LocalArmazenamentoValidacao
{
	public static function salvar($local)
	{
		$validacao = new Validacao();
		$validacao->setData("nome", $local->nome);
		$validacao->getData("nome")->isVazio();

		if ($local->nome) {
			$existelocal = Service::get("local_armazenamento", "nome", $local->nome);

			if ($existelocal && $existelocal->id_local != $local->id_local) {
				$validacao->getData("nome")->isUnico(1);
			}
		}

		return $validacao;
	}
}