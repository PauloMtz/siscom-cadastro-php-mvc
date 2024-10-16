<?php

namespace app\models\dao;

use app\core\Model;

class PessoaDao extends Model
{   
    public function buscarPessoa($dados)
    {
        if ($dados->pesq_email) {
            $sql = "SELECT * FROM pessoa WHERE email = '$dados->pesq_email'";
        } else {
            $sql = "SELECT * FROM pessoa WHERE cpf_cnpj = '$dados->pesq_cpf_cnpj'";
        }

        return $this->select($this->db, $sql, false);
    }

    public function listaCliente()
    {
        $sql = "SELECT pessoa.*, cliente.id_cliente, cliente.limite_credito
                FROM cliente INNER JOIN pessoa
                ON cliente.id_pessoa = pessoa.id_pessoa";

        return $this->select($this->db, $sql);
    }

    public function getCliente($id_cliente)
    {
        $sql = "SELECT pessoa.*, cliente.id_cliente, cliente.limite_credito
                FROM cliente INNER JOIN pessoa
                ON cliente.id_pessoa = pessoa.id_pessoa
                WHERE cliente.id_cliente = $id_cliente";

        return $this->select($this->db, $sql, false);
    }

    public function listaFornecedor()
    {
        $sql = "SELECT pessoa.*, fornecedor.*
                FROM fornecedor INNER JOIN pessoa
                ON fornecedor.id_pessoa = pessoa.id_pessoa";

        return $this->select($this->db, $sql);
    }

    public function getFornecedor($id_fornecedor)
    {
        $sql = "SELECT pessoa.*, fornecedor.*
                FROM fornecedor INNER JOIN pessoa
                ON fornecedor.id_pessoa = pessoa.id_pessoa
                WHERE fornecedor.id_fornecedor = $id_fornecedor";

        return $this->select($this->db, $sql, false);
    }

    public function listaTransportadora()
    {
        $sql = "SELECT pessoa.*, transportadora.*
                FROM transportadora INNER JOIN pessoa
                ON transportadora.id_pessoa = pessoa.id_pessoa";

        return $this->select($this->db, $sql);
    }

    public function getTransportadora($id_transportadora)
    {
        $sql = "SELECT pessoa.*, transportadora.*
                FROM transportadora INNER JOIN pessoa
                ON transportadora.id_pessoa = pessoa.id_pessoa
                WHERE transportadora.id_transportadora = $id_transportadora";

        return $this->select($this->db, $sql, false);
    }

    public function listaVendedor()
    {
        $sql = "SELECT pessoa.*, vendedor.*
                FROM vendedor INNER JOIN pessoa
                ON vendedor.id_pessoa = pessoa.id_pessoa";

        return $this->select($this->db, $sql);
    }

    public function getVendedor($id_vendedor)
    {
        $sql = "SELECT pessoa.*, vendedor.*
                FROM vendedor INNER JOIN pessoa
                ON vendedor.id_pessoa = pessoa.id_pessoa
                WHERE vendedor.id_vendedor = $id_vendedor";

        return $this->select($this->db, $sql, false);
    }
}
