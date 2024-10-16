<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class PessoaValidacao
{
	public static function salvar($pessoa)
	{
		$validacao = new Validacao();
		$validacao->setData("nome_razao_social", $pessoa->nome_razao_social);
		$validacao->setData("cpf_cnpj", $pessoa->cpf_cnpj);
		$validacao->setData("email", $pessoa->email);
		$validacao->setData("cep", $pessoa->cep);
		$validacao->setData("bairro", $pessoa->bairro);
		$validacao->setData("cidade", $pessoa->cidade);
		$validacao->setData("uf", $pessoa->uf);

		$validacao->getData("nome_razao_social")->isVazio()->isMinimo(5);
		$validacao->getData("cep")->isVazio();
		$validacao->getData("cpf_cnpj")->isVazio();
		$validacao->getData("email")->isVazio();
		$validacao->getData("bairro")->isVazio();
		$validacao->getData("cidade")->isVazio();
		$validacao->getData("uf")->isVazio();

		if ($pessoa->email) {
			$existePessoa = Service::get("pessoa", "email", $pessoa->email);

			if ($existePessoa && $pessoa->id_pessoa != $existePessoa->id_pessoa) {
				$validacao->getData("email")->isUnico(1);
			}
		}

		if ($pessoa->cpf_cnpj) {
			$existePessoa = Service::get("pessoa", "cpf_cnpj", $pessoa->cpf_cnpj);

			if ($existePessoa && $pessoa->id_pessoa != $existePessoa->id_pessoa) {
				$validacao->getData("cpf_cnpj")->isUnico(1);
			}
		}

		return $validacao;
	}
}