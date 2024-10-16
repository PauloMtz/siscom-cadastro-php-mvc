<?php

namespace app\models\service;

use app\models\service\PessoaService;

use stdClass;

class UtilService
{
	public static function buscarCNPJ($cnpj)
	{
		// busca o CNPJ no site da RFB
		$retorno = enviarGetCurl("https://receitaws.com.br/v1/cnpj/" . $cnpj);
		
		//imprimir($retorno);

		$empresa = new stdClass;
		$empresa->razao_social = $retorno->nome;
		$empresa->nome_fantasia = $retorno->fantasia;

		$empresa->numero = $retorno->numero;
		$empresa->bairro = $retorno->bairro;
		$empresa->complemento = $retorno->complemento;
		$empresa->cnpj = tira_mascara($retorno->cnpj);
		$empresa->cep = tira_mascara($retorno->cep);
		$empresa->telefone = $retorno->telefone;
		$empresa->email = $retorno->email;
		$empresa->abertura = dataen($retorno->numero);

		//imprimir($empresa);

		$endereco = enviarGetCurl("https://viacep.com.br/ws/" . $empresa->cep . "/json/");

		if ($endereco) {
			$empresa->logradouro = $endereco->logradouro;
			$empresa->cidade = $endereco->localidade;
			$empresa->bairro = $endereco->bairro;
			$empresa->uf = $endereco->uf;
			$empresa->ibge = $endereco->ibge;
			$empresa->ddd = $endereco->ddd;
		}

		return $empresa;
	}

	public static function buscarPessoa($dados)
	{
		$pessoa = PessoaService::buscarPessoa($dados);

		$retorno = new stdClass;

		if ($pessoa) {
			if ($dados->tabela === "cliente") {
				$retorno->resultado = Service::get("cliente", "id_pessoa", $pessoa->id_pessoa);
			} elseif ($dados->tabela === "fornecedor") {
				$retorno->resultado = Service::get("fornecedor", "id_pessoa", $pessoa->id_pessoa);
			} elseif ($dados->tabela === "vendedor") {
				$retorno->resultado = Service::get("vendedor", "id_pessoa", $pessoa->id_pessoa);
			} elseif ($dados->tabela === "transportadora") {
				$retorno->resultado = Service::get("transportadora", "id_pessoa", $pessoa->id_pessoa);
			}

			$retorno->pessoa = $pessoa;
		} else {
			$retorno->pessoa = null;
			$retorno->resultado = null;
		}

		return $retorno;
	}
}
