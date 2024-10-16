<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class TransportadoraValidacao
{
	public static function salvar($transportadora)
	{
		$validacao = new Validacao();
		$validacao->setData("id_pessoa", $transportadora->id_pessoa);
		$validacao->getData("id_pessoa")->isVazio();

		if ($transportadora->id_pessoa) {
			$existeTransportadora = Service::get("transportadora", "id_pessoa", $transportadora->id_pessoa);

			if ($existeTransportadora && $transportadora->id_transportadora != $existeTransportadora->id_transportadora) {
				$validacao->getData("id_pessoa")->isUnico(1, "Já existe um transportadora cadastrado com esses dados");
			}
		}

		return $validacao;
	}
}