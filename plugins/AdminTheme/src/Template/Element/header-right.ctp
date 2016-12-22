<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-life-saver"></i>
            </a>
            <ul class="dropdown-menu">
                <li class="header">Desenvolvedor do Sistema</li>
                <li class="header">
                    <p>Nome: Daniel Araujo Silva<br>
                    Telefone: (34) 996377353<br>
                    Email: danielaraujos@live.com</p>

                </li>
                <li class="footer"><a href="mailto:danielaraujos@live.com">Mandar email</a></li>
            </ul>
        </li>


        <!-- Notifications: style can be found in dropdown.less -->
        <?php /*
        <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning"> 2 </span>
            </a>

            <ul class="dropdown-menu">
                <li class="header">Você tem 2 notificações</li>
                <li>
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                page and may cause design problems
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer">
                    <a href="#">Ver todas</a>
                </li>
            </ul>
        </li>
        */ ?>

        <!-- Tasks: style can be found in dropdown.less -->
        <?php /*
        <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <li><!-- Task item -->
                            <a href="#">
                                <h3>
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                </h3>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                            <a href="#">
                                <h3>
                                    Create a nice theme
                                    <small class="pull-right">40%</small>
                                </h3>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                            <a href="#">
                                <h3>
                                    Some task I need to do
                                    <small class="pull-right">60%</small>
                                </h3>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                            <a href="#">
                                <h3>
                                    Make beautiful transitions
                                    <small class="pull-right">80%</small>
                                </h3>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- end task item -->
                    </ul>
                </li>
                <li class="footer">
                    <a href="#">View all tasks</a>
                </li>
            </ul>
        </li>
        */ ?>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
                if($user_auth['image'] != null){
                    echo $this->Html->Image($user_auth['dir'].'/'.$user_auth['image'],['class'=>"user-image"]);
                }else{
                    echo $this->Html->Image('avatar.png',['class'=>"user-image"]);
                }
                ?>

                <span><?php echo  $user_auth['name'] ?>&nbsp;&nbsp;</span>
                <span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i></span>
            </a>

            <ul class="dropdown-menu">
                <li class="user-header">
                    <?php
                    if($user_auth['image'] != null){
                        echo $this->Html->Image($user_auth['dir'].'/'.$user_auth['image'],['class'=>"img-circle"]);
                    }else{
                        echo $this->Html->Image('avatar.png',['class'=>"img-circle"]);
                    }
                   ?>
                    <p>
                        <?= $user_auth['name'] ?>
                        <?php echo '<small>Sejam bem vindo ao painel! </small>'?>
                    </p>
                </li>

                <!-- Menu Body -->
                <?php /*
                <li class="user-body">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                        </div>
                    </div>
                    <!-- /.row -->
                </li>
                 */ ?>

                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <?= $this->Html->link(
                            __('Perfil'), [
                            'controller' => 'Users',
                            'action' => 'perfil',$user_auth['id']
                        ],
                            [ 'class' => "btn btn-default btn-flat" ]
                        ) ?>
                    </div>

                    <div class="pull-right">
                        <?= $this->Html->link(
                            __('Sair'), [
                                'controller' => 'Users',
                                'action' => 'logout'
                            ],
                            [ 'class' => "btn btn-default btn-flat" ]
                        ) ?>
                    </div>
                </li>
            </ul>
        </li>

        <?php /*
        <!-- Control Sidebar Toggle Button -->
        <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
        */ ?>
    </ul>
</div>