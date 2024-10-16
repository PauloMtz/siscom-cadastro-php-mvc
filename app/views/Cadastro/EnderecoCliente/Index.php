<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php

=======
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
    <div class="rows">
        <div class="col-12">
            <span class=" bg-title text-light text-uppercase h5 mb-0 text-branco">
                <svg class="icon cadastro" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                        stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Lista de contacorrentes
            </span>

            <div class="caixa">

                <div class="px-2 py-2 w-100 d-grid">
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                    <?php if (isset($enderecocliente)) { ?>
                        <form action="<?php echo URL_BASE . ('enderecocliente/update' . $enderecocliente->id) ?>" method="POST">
                            @method('put')
                    <?php } else { ?>
                            <form action="<?php echo URL_BASE . ('enderecocliente/store') ?>" method="POST">
                    <?php } ?>
                    <div class=" <?php echo isset($enderecocliente->logradouro) ? 'bg-edit' : 'caixafield' ?>  p-2 pt-0 radius-4">
=======
                        <form action="{{ route('enderecocliente.update', $enderecocliente->id) }}" method="POST">
                        <form action="{{ route('enderecocliente.store') }}" method="POST">
             
                    <div class=" {{ isset($enderecocliente->logradouro) ? 'bg-edit' : 'caixafield' }}  p-2 pt-0 radius-4">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                        <div class="   p-2 pt-0 radius-4">
                            <div class="rows center-middle">

                                <div class="col-3">
                                    <label class="text-label d-block text-branco">Cliente </label>
                                    <select class="form-campo" name="cliente_id">
                                        <?php foreach ($clientes as $cliente) { ?>
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                            <option value='<?php echo $cliente->id ?>'
                                                <?php echo ($enderecocliente->cliente_id ?? null) == $cliente->id ? 'selected' : '' ?>
                                                required>
                                                <?php echo $cliente->nome_razao_social ?> </option>
=======
                                            <option value="<?php echo $cliente->id ?>"
                                                <?php echo ($cliente->id ?? null) == $cliente->id ? 'selected' : '' ?>>
                                                <?php echo $cliente->nome_razao_social ?> 
                                            </option>
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-2 mb-3">
                                    <label class="text-label">Cep<span class="text-vermelho">*</span></label>
                                    <input type="text" name="cep" id="cep"
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->cep ?? ('cep') ?>"
=======
                                        value=""
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                        class="form-campo busca_cep mascara-cep">
                                </div>

                                <div class="col-3 mb-3">
                                    <label class="text-label">Logradouro<span class="text-vermelho">*</span></label>
                                    <input type="text" name="logradouro" required id="logradouro"
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->logradouro ?? ('cep') ?>" class="form-campo rua">
=======
                                        value="" class="form-campo rua">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Complemento</label>
                                    <input type="text" name="complemento" maxlength="60" id="complemento"
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->complemento ?? ('cep') ?>" class="form-campo">
=======
                                        value="" class="form-campo">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                </div>
                                <div class="col-1 mb-4">
                                    <label class="text-label">Numero<span class="text-vermelho">*</span></label>
                                    <input type="text" name="numero" required id="numero"
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->numero ?? ('cep') ?>" class="form-campo">
=======
                                        value="" class="form-campo">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Bairro</label>
                                    <input type="text" name="bairro" maxlength="60" id="bairro"
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->bairro ?? ('cep') ?>" class="form-campo bairro">
=======
                                        value="" class="form-campo bairro">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                </div>


                                <div class="col-1 mb-2">
                                    <label class="text-label">UF</label>
                                    <input type="text" name="uf" id="uf" required
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->uf ?? ('cep') ?>" class="form-campo estado">
=======
                                        value="" class="form-campo estado">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                </div>

                                <div class="col-3 mb-3">
                                    <label class="text-label">Cidade</label>
                                    <input type="text" name="cidade" maxlength="60" required id="cidade"
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->cidade ?? ('cep') ?>" class="form-campo cidade">
=======
                                        value="" class="form-campo cidade">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label">Ibge</label>
                                    <input type="text" name="ibge" id="ibge"
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        value="<?php echo $enderecocliente->ibge ?? ('cep') ?>" class="form-campo ibge ">
=======
                                        value="" class="form-campo ibge ">
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                </div>
                                <div class="col-2 mt-0 pt-4">
                                    <input type="submit" value="Salvar" class="btn btn-roxo text-uppercase w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-12">
            <div class="px-2">
                <div class="tabela-responsiva pb-4">
                    <table cellpadding="0" cellspacing="0" id="dataTable" width="100%" class="table contacorrente">
                        <thead>
                            <tr>
                                <th align="left">ID</th>
                                <th align="left">Endereço</th>
                                <th align="center">Complemento</th>
                                <th align="center">Bairro</th>
                                <th align="center">Cidade</th>
                                <th align="center">UF</th>
                                <th align="center">Cep</th>
                                <th align="center">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($lista as $l) { ?>
                                <tr>
                                    <td align="center"><?php echo $l->id ?></td>
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                    <td align="left"><?php echo $l->logradouro ?> , Num: <?php echo $l->numero ?> </td>
=======
                                    <td align="left"><?php echo $l->logradouro ?> , <?php echo $l->numero ?></td>
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                    <td align="center"><?php echo $l->complemento ?></td>
                                    <td align="center"><?php echo $l->bairro ?></td>
                                    <td align="center"><?php echo $l->cidade ?></td>
                                    <td align="center"><?php echo $l->uf ?></td>
                                    <td align="center"><?php echo $l->cep ?></td>
                                    <td align="center">
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                        <a href="<?php echo URL_BASE . ('enderecocliente/edit' . $l->id) ?>"
=======
                                        <a href="<?php echo URL_BASE . "enderecocliente/edit/" . $l->id ?>"
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                            class="d-inline-flex gap-3 btn btn-outline-roxo btn-pequeno"><i
                                                class="fas fa-edit"></i>
                                            Editar</a>

                                        <a href="javascript:;"
                                            onclick="confirm('Tem Certeza?') ? document.getElementById('apagar<?php echo $l->id ?>').submit() : '';"
                                            class="d-inline-flex gap-3 btn btn-outline-vermelho btn-pequeno">
                                            <i class="fas fa-trash-alt"></i>
<<<<<<< HEAD:app/views/Cadastro/EnderecoCliente/Index.blade.php
                                            <form action="<?php echo URL_BASE . ('enderecocliente/destroy' . $l->id) ?>" method="POST"
=======
                                            <form action="<?php echo URL_BASE . "enderecocliente/destroy/" . $l->id ?>" method="POST"
>>>>>>> 77c9a42a9f1a7eceeea7e06211adbe5328883af8:app/views/Cadastro/EnderecoCliente/Index.php
                                                id="apagar<?php echo $l->id ?>">
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>

                                            Excluir
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>
