<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto - mjailton</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale =1">
    <!--css-->
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/componentes/css/style_Componente.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/home-venda.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style-m.css">
    <!--font icones-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        var base_url = "<?php echo URL_BASE ?>";
        var _token = "";
    </script>
</head>

<body>
    <?php 
        $this->verErro();
        $this->verMsg();
    ?>
    <!--- cabecalho -->
    <?php include('cabecalho.php') ?>
    <!--- fim cabecalho -->
    <?php include('menu.php') ?>    

    <div class="conteudo">
        <?php $this->load($view, $viewData) ?>

        <div class="window load fechar_giragira" id="giragira">
            <span class="text-load">Carregando...</span>
        </div>


    </div>


    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo URL_BASE ?>assets/js/jquery.mask.js"></script>

    <script src="<?php echo URL_BASE ?>assets/componentes/js/js_data_table.js"></script>
    <script src="<?php echo URL_BASE ?>assets/componentes/js/js_modal.js"></script>
    <script src="<?php echo URL_BASE ?>assets/componentes/js/js_util.js"></script>
    <script src="<?php echo URL_BASE ?>assets/componentes/js/js_mascara.js"></script>
    <script src="<?php echo URL_BASE ?>assets/componentes/js/upload.js"></script>
   
    <script src="<?php echo URL_BASE ?>assets/js/js_pessoa.js"></script>

    <script>
        $(function() {
            $("#tab").tabs();
        });
    </script>
<div id="fundo_preto"></div>
</body>

</html>
