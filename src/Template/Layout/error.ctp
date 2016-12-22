<?php $this->layout = false;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Erro 404 - WebService - Guia do Calouro</title>
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
                <h1>404</h1>
                <h3>PÁGINA NÃO ENCONTRADA</h3>
                <p>Lamentamos, mas algo deu errado.</p>
            </div>
        </div>
    </div>
</section>
<!-- end Header -->


<!-- Button -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">



                <a href="<?php echo $this->Url->build(['controller'=>'Pages','action'=>'index']);?>">
                    <div class="btn btn-action">Página Inicial</div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end Button -->



</body>
</html>
