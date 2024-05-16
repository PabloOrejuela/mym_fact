<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta name="description" content="">
    <meta name="author" content="Pablo Orejuela">
    <link rel="icon" href="<?= site_url(); ?>public/images/invoice.png">
    <title>MyM facturador</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= site_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= site_url(); ?>public/css/jquery.toast.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="<?= site_url(); ?>public/css/sb-admin.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/estilos.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/bootstrap_datepicker.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/tablas/bootstrap_datatable.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/estilos.css" rel="stylesheet">
     
    <!-- Custom Fonts -->
    <link href="<?= site_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= site_url(); ?>public/css/pedidos.css" rel="stylesheet" type="text/css">
    <script src="<?= site_url(); ?>public/js/jquery.js"></script>
    <script src="<?= site_url(); ?>public/js/jquery.toast.min.js" type="text/javascript"></script>
    <script src="<?= site_url(); ?>public/js/formularios_dinamicos.js"></script>
    <script src="<?= site_url(); ?>public/js/moment-with-locales.js"></script>
    <script src="<?= site_url(); ?>public/js/bootstrap_datepicker.js"></script>
    <script src="<?= site_url(); ?>public/js/adicionales/boostrapt_paginacion.js"></script>
    <script src="<?= site_url(); ?>public/js/adicionales/boostrap_min_pagination.js"></script>
    
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>

        $(document).ready(function() {
            $('.tabla_datos').DataTable();
        });

        $(function (){
            /*muestra un mensaje toast desde el controlador*/
            <?php if(isset($toast)&& $toast!=null){?>
            $.toast({
                heading: '<?php echo $toast['titulo'];?>',
                text: '<?php echo $toast['mensaje'];?>',
                showHideTransition: 'slide',
                icon: '<?php echo $toast['icono'];?>'
            });
            <?php } ?>
        });

        function crear_toast(titulo,cuerpo,icono='info'){
            $.toast({
                heading: titulo,
                text: cuerpo,
                showHideTransition: 'slide',
                icon: icono
            });
        }
    </script>
</head>
<body style="background-color: white;">