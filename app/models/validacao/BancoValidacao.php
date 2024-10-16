<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class BancoValidacao
{
	public static function salvar($banco)
	{
		$validacao = new Validacao();
		$validacao->setData("codigo", $banco->codigo);
		$validacao->setData("banco", $banco->banco);

		$validacao->getData("codigo")->isVazio();
		$validacao->getData("banco")->isVazio();

		if ($banco->banco) {
			$existeBanco = Service::get("banco", "codigo", $banco->codigo);

			if ($existeBanco && $existeBanco->id_banco != $banco->id_banco) {
				$validacao->getData("codigo")->isUnico(1);
			}
		}

		return $validacao;
	}
}