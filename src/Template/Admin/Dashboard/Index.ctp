<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $dados['telefones']?></h3>

                    <p>Telefones Utéis</p>
                </div>
                <div class="icon">
                    <i class="ion ion ion-ios-telephone-outline"></i>
                </div>
                <a href="<?php echo $this->Html->Url->build(['controller'=>'Telephones','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $dados['emails']?></h3>

                    <p>Emails</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-email-outline"></i>
                </div>
                <a href="<?php echo $this->Html->Url->build(['controller'=>'Emails','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $dados['dicas'];?></h3>

                    <p>Dicas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-copy-outline"></i>
                </div>

                <a href="<?php echo $this->Html->Url->build(['controller'=>'typs','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo $dados['users'];?></h3>

                    <p>Administradores</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo $this->Html->Url->build(['controller'=>'Users','action'=>'index']);?>" class="small-box-footer">
                    Ver mais <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>



    </div>


</section>
<!-- /.content -->



