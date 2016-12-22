<aside class="main-sidebar">
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php
                if($user_auth['image'] != null){
                    echo $this->Html->Image($user_auth['dir'].'/'.$user_auth['image'],['class'=>"img-circle"]);
                }else{
                    echo $this->Html->Image('avatar.png',['class'=>"img-circle"]);
                }?>
            </div>
            <div class="pull-left info">
                <p><?= $user_auth['name'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MENU DE NAVEGAÇÃO</li>

            <?= $this->Menu->item('fa fa-dashboard', 'Home', 'Index'); ?>

            <?= $this->Menu->treeView('fa fa-tags', 'Promoções', 'promotions', [
                    ['Adicionar Participante', '../peoples/add'],
                    ['Adicionar Promoção', 'add'],
                    ['Gerenciar Promoções', 'index'],
                    ['Gerenciar Ganhadores', '../winners/index']
                ]
            );
            ?>
            <?= $this->Menu->treeView('fa fa-child', 'Programações', 'internPrograms', [
                    ['Adicionar Participante', '../internPeoples/add'],
                    ['Adicionar Programação', 'add'],
                    ['Gerenciar Programações', 'index'],
                    ['Gerenciar Ganhadores', '../InternWinners/index']
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-desktop', 'Programas', 'programs', [
                    ['Adicionar Programa', 'add'],
                    ['Gerenciar Programas', 'index']
                ]
            );
            ?>


            <?= $this->Menu->treeView('fa fa-gear', 'Configurações', 'optimizations', [
                    ['Gerenciar Usuários', '../users/index'],
                    ['Gerenciar SEO', 'index'],
                ]
            );
            ?>
            <?= $this->Menu->item('fa fa-sign-out', 'Sair', 'users', 'logout'); ?>
        </ul>
    </section>
</aside>