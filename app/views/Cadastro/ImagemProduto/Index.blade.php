
    <div class="rows">
        <div class="col-12">
            <span class=" bg-title text-light text-uppercase h5 mb-0 text-branco">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="icon cadastro">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                    </path>
                </svg>
                ALTERAR PRODUTO
            </span>
        </div>

        <div class="col-12">


            <div class="caixa mb-0 mt-3" id="tab-1">
                <div class="caixa mb-2 mt-3" id="tab-2">
                    <div class="col-12 text-end d-flex">
                        <a href="javascript:;" class="btn btn-amarelo d-inline-block" onclick="abrirModal('#uploads')"><svg
                                width="14" height="15" viewBox="0 0 21 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.1304 21V1M10.1304 1L1 10M10.1304 1L19.2609 10" stroke="black"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Nova Imagem</a>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <legend>Imagens</legend>
                            <div class="m-auto">
                                <div class="rows">
                                    <div class="col-12">

                                        <div class="col-12 px-0">
                                            <div class="radius-4 cxImgProd">
                                                <div class="rows lista-miniatura" id="lista_imagens">
                                                    <?php foreach ($lista as $img) { ?>
                                                        <div class="col-2 mb-3 textThumb">
                                                            <div class="banner-thumb radius-4 p-1 border"
                                                                style="background:#fff">
                                                                <img src="<?php echo URL_IMAGEM . ('storage/' . $img->imagem) ?>"
                                                                    class="img-fluido">

                                                                <a href="javascript:;"
                                                                    onclick="confirm('Tem Certeza?') ? document.getElementById('apagar<?php echo $img->id ?>').submit() : '';"
                                                                    class="btn btn-vermelho btn-circulo"><i
                                                                        class="fas fa-times"></i>

                                                                    <form action="<?php echo URL_BASE . ('imagem/destroy/' . $img->id) ?>"
                                                                        method="POST" id="apagar<?php echo $img->id ?>">
                                                                    </form>

                                                                </a>

                                                            </div>
                                                            <small><?php echo $img->titulo ?> </small>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </fieldset>
                </div>
            </div>


        </div>

    </div>


    <div class="modal_livre medio image" id="uploads" style="z-index:10">
        <a href="javascript:;" class="fechar_livre" onclick="fecharModalLivre()">x</a>
        <form action="<?php echo URL_BASE . ('imagem.store') ?>" method="POST" enctype="multipart/form-data">

            <div class="caixa mb-2 mt-0">
                <div class="col-12 mt-3">
                    <fieldset class="tranparent border-0">
                        <legend class="h5 d-inline-block mb-0">Adicionar Imagem</legend>
                        <div class="m-auto">
                            <div class="rows">
                                <div class="col-4">
                                    <div class="banner-thumb radius-4 border text-center"
                                        style="background:#fff;padding:3px;min-height:auto">
                                        <label class="py-1 px-2 mt-3  text-center position-relative edit-upload">
                                            <img src="<?php echo URL_IMAGEM .('assets/img/semproduto.png') ?>" class="img-fluido opaco"
                                                id="imgUp">
                                            <input type="file" name="imagem" id="img_produto"
                                                onchange="valida_imagem('img_produto', 'imgUp' )">
                                            <span>Carregar produto</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="rows">
                                        <div class="col-12 mb-0">
                                            <label class="text-label">Nome da Imagem</label>
                                            <input type="text" name="titulo" class="form-campo">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="text-label">Categoria</label>
                                            <div class="group-btn d-flex center-midlle">
                                                <select class="form-campo" name="categoria_id" id="cb_categoria_id">
                                                    <?php foreach ($categorias as $cat) { ?>
                                                        <option value="<?php echo $cat->id ?>">
                                                            <?php echo $cat->categoria ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <a href="javascript:;" onclick="abrirModal('#modalCategoria')"
                                                    class="text-verde p-1 border radius-50 ml-1 fas fa-plus"
                                                    title="Inserir nova categoria"
                                                    style="border-color:#1bf1a1!important;color:#1bf1a1!important"></a>
                                            </div>
                                        </div>


                                        <div class="col-12 text-center">
                                            <div class="carregar-label mt-0 d-flex justify-content-space-between align-items-center p-0"
                                                style="overflow:hidden">

                                                <label class="btn btn-roxo width-100"><i class="fas fa-arrow-up"></i>
                                                    Subir imagem<input type="submit" class="d-none"></label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </fieldset>
    </div>
    </form>
    </div>
    <div id="fundo_modal_livre"></div>
