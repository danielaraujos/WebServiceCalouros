<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> <?= $title ?> </title>

    <?= $this->Html->charset() ?>
    <?= $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.min.css') ?>
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <?= $this->Html->css('skins/skin-red.css') ?>
    <!-- iCheck -->
    <?= $this->Html->css('/plugins/iCheck/flat/red.css') ?>
    <!-- Morris chart -->
    <?= $this->Html->css("/plugins/morris/morris.css"); ?>
    <!-- jvectormap -->
    <?= $this->Html->css("/plugins/jvectormap/jquery-jvectormap-1.2.2.css"); ?>
    <!-- Date Picker -->
    <?= $this->Html->css("/plugins/datepicker/datepicker3.css"); ?>
    <!-- Daterange picker -->
    <?= $this->Html->css("/plugins/daterangepicker/daterangepicker-bs3.css"); ?>
    <!-- bootstrap wysihtml5 - text editor -->
    <?= $this->Html->css("/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?= $this->Html->css("https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"); ?>
    <?= $this->Html->css("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"); ?>
    <![endif]-->

    <?= $this->fetch('script'); ?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper skin-yellow-light">

    <?= $this->element('header'); ?>

    <?= $this->element('sidebar'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?= $this->Flash->render() ?>
            <h1> <?= $title ?> <small><?= $subtitle ?></small></h1>
            <?php /*
            <ol class="breadcrumb">
                <?= $this->Html->getCrumbs(' > ', 'Home'); ?>
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            */ ?>
        </section>

        <section class="content" id="contentBody">
            <?= $this->fetch('content') ?>
        </section>
    </div>

    <?= $this->element('footer'); ?>

    <?// $this->element('right-sidebar'); ?>

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<?= $this->Html->script("/plugins/jQuery/jQuery-2.2.0.min.js"); ?>
<!-- jQuery UI 1.11.4 -->
<?= $this->Html->script("https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"); ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<?= $this->Html->script("bootstrap.min.js"); ?>
<!-- Morris.js charts -->
<?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"); ?>
<?= $this->Html->script("/plugins/morris/morris.min.js"); ?>
<!-- Sparkline -->
<?= $this->Html->script("/plugins/sparkline/jquery.sparkline.min.js"); ?>
<!-- jvectormap -->
<?= $this->Html->script("/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"); ?>
<?= $this->Html->script("/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"); ?>
<!-- jQuery Knob Chart -->
<?= $this->Html->script("/plugins/knob/jquery.knob.js"); ?>
<!-- daterangepicker -->
<?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"); ?>
<?= $this->Html->script("/plugins/daterangepicker/daterangepicker.js"); ?>
<!-- datepicker -->
<?= $this->Html->script("/plugins/datepicker/bootstrap-datepicker.js"); ?>
<!-- Bootstrap WYSIHTML5 -->
<?= $this->Html->script("/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"); ?>
<!-- Slimscroll -->
<?= $this->Html->script("/plugins/slimScroll/jquery.slimscroll.min.js"); ?>
<!-- FastClick -->
<?= $this->Html->script("/plugins/fastclick/fastclick.js"); ?>
<!-- CkEditor -->
<?= $this->Html->script("/plugins/ckeditor/ckeditor.js"); ?>
<!-- AdminLTE App -->
<?= $this->Html->script("app.min.js"); ?>

<?= $this->fetch('scriptBottom'); ?>

</body>
</html>
