
    <div class="rows">
        <div class="col-12">
            <span class=" bg-title text-light text-uppercase h5 mb-3 text-branco">
                <svg class="icon cadastro" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                        stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                CADASTRAR transportadora
            </span>
        </div>

        <div class="col-12">

            <div id="tab">
                <form action="<?php echo URL_BASE . "transportadora/salvar" ?>" method="post">                   
                    <div class="col-12 mb-4">
                    <fieldset>
                            <legend>Pesquisar</legend>
                            <div class="rows center-middle">
                                <div class="col-4 mb-3" >
                                    <label class="text-label">CNPJ/CPF</label>
                                    <div class="grupo-form-btn">
                                        <input type="text" id="pesq_cpf_cnpj" class="form-campo">
                                    </div>
                                </div>

                                <div class="col-4 mb-3" >
                                    <label class="text-label">Digite o Valor</label>
                                    <div class="grupo-form-btn">
                                        <input type="text" id="pesq_email"  class="form-campo">
                                    </div>
                                </div>
                                <div class="col-2 mt-4 mb-3">
                                    <input type="button" onclick="pesquisarPessoa('transportadora')" value="Pesquisar"
                                        class="width-100 btn btn-roxo d-block m-auto">
                                </div>
                            </div>
                        </fieldset>

                    </div>

                    <div id="tab-1">
                        <div class="p-2">
                            <span class="d-block mt-0 mb-4 border-bottom text-uppercase pb-1">Informações básicas</span>
                            <div class="rows">
                                <div class="col-2 mb-3">
                                    <label class="text-label">Tipo transportadora</label>
                                    <select name="tipo_pessoa" id="tipo_pessoa" class="form-campo"  onchange="tipotransportadora()">
                                        <option value="juridica">Juridica</option>
                                        <option value="fisica">Física</option>

                                    </select>
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label id="lblCnpj">CNPJ<span class="text-vermelho">*</span></label>
                                    <input type="text" name="cpf_cnpj" id="cpf_cnpj" value="<?php echo $transportadora->cpf_cnpj ?? null ?>"
                                        class="form-campo">
                                </div>
                                <div class="col-1 mt-4 mb-3">
                                    <input type="button" onclick="pesquisarCnpj()" value="Buscar "
                                        class="width-100 btn btn-roxo d-block m-auto px-0 py-1 btn-pequeno">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label" id="lblRazaoSocial">Nome/Razão Social<span
                                            class="text-vermelho">*</span></label>
                                    <input type="text" name="nome_razao_social" id="nome_razao_social" required
                                        value="<?php echo $transportadora->nome_razao_social ?? null ?>" class="form-campo">
                                </div>

                                <div class="col-3 mb-3">
                                    <label class="text-label" id="lblFantasia">Apelido/Nome Fantasia</label>
                                    <input type="text" name="apelido_fantasia"  id="apelido_fantasia"
                                        value="<?php echo $transportadora->apelido_fantasia ?? null ?>" class="form-campo">
                                </div>

                                <div class="col-2 mb-3">
                                    <label class="text-label" id="lblInscEstadual">RG/Inscrição Estadual</label>
                                    <input type="text" name="rg_ie" maxlength="14" id="rg_ie"
                                        value="<?php echo $transportadora->rg_ie ?? null ?>" class="form-campo">
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label">Telefone:</label>
                                    <input type="text" id="telefone" name="telefone" value="<?php echo $transportadora->telefone ?? null ?>" class="form-campo mascara-celular">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="text-label">Email</label>
                                    <input type="text" id="email"  name="email" value="<?php echo $transportadora->email ?? null ?>"
                                        class="form-campo">
                                </div>


                            </div>
                        </div>
                    </div>

                    <div id="tab-2">
                        <div class="p-2">
                            <span class="d-block mt-4 mb-4 border-bottom text-uppercase pb-1">Endereço</span>
                            <div class="rows">
                                <div class="col-2 mb-3">
                                    <label class="text-label">CEP</label>
                                    <div class="input-grupo">
                                        <input type="text" value=" <?php echo $transportadora->cep ?? null ?>" name="cep" id="cep"
                                            class="form-campo busca_cep mascara-cep">

                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Logradouro</label>
                                    <input type="text" name="logradouro" id="logradouro"
                                        value=" <?php echo $transportadora->logradouro ?? null ?>" class="form-campo rua">
                                </div>
                                <div class="col-2 mb-4">
                                    <label class="text-label">Numero</label>
                                    <input type="text" name="numero" id="numero" value="<?php echo $transportadora->numero ?? null ?>"
                                        class="form-campo ">
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-label">UF</label>
                                    <input type="text" name="uf" id="uf" value="<?php echo $transportadora->uf ?? null ?>"
                                        class="form-campo estado">
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Complemento</label>
                                    <input type="text" name="complemento" id="complemento"
                                        value="<?php echo $transportadora->complemento ?? null ?>" class="form-campo">
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Bairro</label>
                                    <input type="text" name="bairro" id="bairro" value="<?php echo $transportadora->bairro ?? null ?>"
                                        class="form-campo bairro ">
                                </div>

                                <div class="col-4 mb-2">
                                    <label class="text-label">Cidade</label>
                                    <input type="text" name="cidade" id="cidade" value="<?php echo $transportadora->cidade ?? null ?>"
                                        class="form-campo cidade">
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-label">IBGE</label>
                                    <input type="text" name="ibge" id="ibge" value="<?php echo $transportadora->ibge ?? null ?>"
                                        class="form-campo ibge">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 text-center pb-4">
                        <input type="hidden" value="<?php echo $transportadora->id_pessoa ?? null ?>" name="id_pessoa" >
                        <input type="hidden" value="<?php echo $transportadora->id_transportadora ?? null ?>" name="id_transportadora" >
                        <input type="submit" value="Salvar" class="btn btn-roxo m-auto">
                    </div>
                </form>
            </div>
        </div>


    </div>
    <script>
        function tipotransportadora() {
            var tp = $("#tipo_transportadora").val();

            if (tp == "F") {
                $("#div_pesquisar").hide();
                $("#divIscEstadual").hide();
                $("#divSuframa").hide();
                $("#divFantasia").hide();

                $("#lblInscEstadual").html("RG");
                $("#lblCnpj").html('CPF');
                $("#lblRazaoSocial").html('Nome');
                $("#lblFantasia").html('Apelido');
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
                $("#lblFantasia").html('Nome Fantasia');
                $("#cnpj").mask('00.000.000/0000-00', {
                    reverse: true
                });

                $("#lblCnpj").html('CNPJ');
                $("#indFinal option:contains(Não)").attr('selected', true);
                $("#tipo_contribuinte option:contains(ICMS)").attr('selected', true);

            }
        }
    </script>
