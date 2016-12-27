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

            <?= $this->Menu->item('fa fa-dashboard', 'Dashboard', 'Dashboard'); ?>

            <?= $this->Menu->treeView('fa fa-building', 'Edifícios ', 'Buildings', [
                    ['Adicionar edifício', 'add'],
                    ['Gerenciar edifícios', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-calendar-check-o', 'Calendário acadêmico ', 'calendars', [
                    ['Adicionar evento', 'add'],
                    ['Gerenciar calendário', 'index'],
                    ['Gerenciar meses', '../MonthCalendars/index']
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-television', 'Beneficios', 'benefits', [
                    ['Adicionar beneficio', 'add'],
                    ['Gerenciar beneficios', 'index'],
                ]
            );
            ?>
            <?= $this->Menu->treeView('fa fa-users', 'Gestão', 'managements', [
                    ['Adicionar gestão', 'add'],
                    ['Gerenciar gestão', 'index'],
                    ['Gerenciar categoria', '../category-managements/index']
                ]
            );
            ?>
            <?= $this->Menu->treeView('fa fa-phone', 'Telefones Uteis', 'telephones', [
                    ['Adicionar telefone', 'add'],
                    ['Gerenciar telefones', 'index'],
                ]
            );
            ?>
            <?= $this->Menu->treeView('fa fa-envelope', 'Emails Institucionais', 'emails', [
                    ['Adicionar email', 'add'],
                    ['Gerenciar emails', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-bus', 'Transporte', 'transports', [
                    ['Gerenciar transporte', 'edit/1'],
                    ['Gerenciar turnos', '../shifts/index'],
                    ['Gerenciar horários', '../schedules/index'],
                    ['Gerenciar locais', '../places/index'],
                 ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-info-circle', 'Dicas', 'typs', [
                 ['Adicionar dica', 'add'],
                 ['Gerenciar dicas', 'index'],
                ['Gerenciar categoria', '../category-typs'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-cog', 'Outras Páginas', '', [
                    ['Gerenciar alimentação', 'feedings/edit/1'],
                    ['Gerenciar sobre', 'abouts/edit/1'],
                ]
            );
            ?>


            <!--<? $this->Menu->treeView('fa fa-users', 'Usuários', 'users', [-->
                    <!--['Adicionar usuários', 'add'],-->
                    <!--['Gerenciar usuários', 'index'],-->
                <!--]-->
            <!--);-->
            <!--?>-->

            <!--<?= $this->Menu->item('fa fa-sign-out', 'Sair', 'users', 'logout'); ?>-->
        </ul>
    </section>
</aside>