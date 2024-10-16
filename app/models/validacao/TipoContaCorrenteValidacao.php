<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class TipoContaCorrenteValidacao
{
	public static function salvar($tipo_conta_corrente)
	{
		$validacao = new Validacao();
		$validacao->setData("tipo_conta_corrente", $tipo_conta_corrente->tipo_conta_corrente);
		$validacao->getData("tipo_conta_corrente")->isVazio();

		if ($tipo_conta_corrente->tipo_conta_corrente) {
			$existetipo_conta_corrente = Service::get("tipo_conta_corrente", "tipo_conta_corrente", $tipo_conta_corrente->tipo_conta_corrente);

			if ($existetipo_conta_corrente && $existetipo_conta_corrente->id_tipo_conta_corrente != $tipo_conta_corrente->id_tipo_conta_corrente) {
				$validacao->getData("tipo_conta_corrente")->isUnico(1);
			}
		}

		return $validacao;
	}
}