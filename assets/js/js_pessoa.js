function pesquisarPessoa(tabela) {
    var pesq_cpf_cnpj = tira_mascara($("#pesq_cpf_cnpj").val());
    var pesq_email = $("#pesq_email").val();
    if (pesq_cpf_cnpj == "" && pesq_email == "") {
        alert("selecione um campo antes");
        return false;
    }
    
    $.ajax({
        url: base_url + "util/buscarPessoa/" ,
        type: "POST",
        dataType: "json",
        data: {
            "pesq_cpf_cnpj":pesq_cpf_cnpj,
            "pesq_email":pesq_email,
            "tabela":tabela
        },
        success: function(data) {
            console.log(data);
            fecharGiraGira();
            if (data.tem_erro == false) {
                if(data.achou=="S"){
                    preencherPessoa(data.retorno.pessoa);
                }else{
                    alert("Nenhum registro encontrado!");
                }
            }         
        },
        beforeSend: function() {
            giraGira();
        }
    });
}

function pesquisarCnpj() {
    var cnpj = tira_mascara($("#cpf_cnpj").val());
    if (cnpj == "") {
        return false;
    }
    $.ajax({
        url: base_url + "util/buscarcnpj/" + cnpj,
        type: "GET",
        dataType: "json",
        data: {},
        success: function(data) {
            if (data.tem_erro == true) {
                fecharGiraGira();;
            } else {
                fecharModal();
                preencher(data.retorno);
                fecharGiraGira();
            }
        },
        beforeSend: function() {
            giraGira();
        }
    });
}

function preencherPessoa(data) {
    $("#tipo_pessoa").val(data.tipo_pessoa);
    $("#cpf_cnpj").val(data.cpf_cnpj);
    $("#nome_razao_social").val(data.nome_razao_social);
    $("#apelido_fantasia").val(data.apelido_fantasia);
    $("#rg_ie").val(data.rg_ie);
    $("#telefone").val(data.telefone);
    $("#email").val(data.email);

    $("#cep").val(data.cep);
    $("#logradouro").val(data.logradouro);
    $("#numero").val(data.numero);
    $("#uf").val(data.uf);
    $("#complemento").val(data.complemento);
    $("#bairro").val(data.bairro);
    $("#cidade").val(data.cidade);
    $("#ibge").val(data.ibge);
    $("#data_cadastro").val(data.data_cadastro);
}

function preencher(data) {
    $("#nome_razao_social").val(data.razao_social);
    $("#apelido_fantasia").val(data.nome_fantasia);
    $("#numero").val(data.numero);
    $("#bairro").val(data.bairro);
    $("#complemento").val(data.complemento);
    $("#cpf_cnpj").val(data.cnpj);
    $("#cep").val(data.cep);
    $("#logradouro").val(data.logradouro);
    $("#cidade").val(data.cidade);
    $("#bairro").val(data.bairro);
    $("#uf").val(data.uf);
    $("#ibge").val(data.ibge);
    $("#telefone").val(data.telefone);
    $("#email").val(data.email);
    $("#ultima_atualizacao").val(data.ultima_atualizacao);
    $("#data_criacao").val(data.abertura)
}

function tipoCliente() {
    var tp = $("#tipo_cliente").val();

    if (tp == "F") {
        $("#div_pesquisar").hide();
        $("#divIscEstadual").hide();
        $("#divSuframa").hide();
        $("#divFantasia").hide();

        $("#lblInscEstadual").html("RG");
        $("#lblCnpj").html('CPF');
        $("#lblRazaoSocial").html('Nome');
        $("#cnpj").mask('000.000.000-00', {
            reverse: true
        });
        $("#indFinal option:contains(Sim)").attr('selected', true);
        $("#tipo_contribuinte option:contains(Não)").attr('selected', true);
    } else {
        $("#div_pesquisar").show();
        $("#divIscEstadual").show();
        $("#divSuframa").show();
        $("#divFantasia").show();

        $("#lblInscEstadual").html("Inscrição Estadual");
        $("#lblCnpj").html('CNPJ');
        $("#lblRazaoSocial").html('Razão Social');
        $("#cnpj").mask('00.000.000/0000-00', {
            reverse: true
        });

        $("#lblCnpj").html('CNPJ');
        $("#indFinal option:contains(Não)").attr('selected', true);
        $("#tipo_contribuinte option:contains(ICMS)").attr('selected', true);

    }
}