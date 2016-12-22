<?php
    $this->layout = false;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>WebService - Guia do calouro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <?php echo $this->Html->Css(
    [
    '/assets/bootstrap/css/bootstrap.min.css',
    '/assets/css/style.css',
    '/assets/css/responsive.css'
    ]
    );?>
    <!--
    <link type="text/css" media="all" href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link type="text/css" media="all" href="../assets/css/style.css" rel="stylesheet" />

    <link type="text/css" media="all" href="../assets/css/responsive.css" rel="stylesheet" />-->
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css' />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" />
</head>
<body style="background-color:#eee; margin-top: 180px">
<!-- Header -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Oi!</h1>
                <h3>Bem Vindo ao WebService</h3>
                <p>Guia do Calouro</p>
            </div>
        </div>
    </div>
</section>
<!-- end Header -->





<!-- Scripts -->
<script src="../assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
