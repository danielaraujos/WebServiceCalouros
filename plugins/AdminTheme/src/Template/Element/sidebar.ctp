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

            <?= $this->Menu->treeView('fa fa-tags', 'Edifícios ', 'Buildings', [
                    ['Adicionar edifício', 'add'],
                    ['Gerenciar edifícios', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-tags', 'Calendário acadêmico ', 'calendars', [
                    ['Adicionar evento', 'add'],
                    ['Gerenciar calendário', 'index'],
                    ['Gerenciar meses', '../MonthCalendars/index']
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-users', 'Beneficios', 'benefits', [
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
            <?= $this->Menu->treeView('fa fa-users', 'Telefones Uteis', 'telephones', [
                    ['Adicionar telefone', 'add'],
                    ['Gerenciar telefones', 'index'],
                ]
            );
            ?>
            <?= $this->Menu->treeView('fa fa-users', 'Emails Institucionais', 'emails', [
                    ['Adicionar email', 'add'],
                    ['Gerenciar emails', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-users', 'Páginas Gerais', 'general', [
                    ['Gerenciar transporte', 'index'],
                    ['Gerenciar alimentação', '../feedings/edit/1'],
                    ['Gerenciar sobre', '../abouts/edit/1'],
                ]
            );
            ?>
            <?= $this->Menu->treeView('fa fa-users', 'Dicas', 'tips', [
                    ['Adicionar dica', 'add'],
                    ['Gerenciar dicas', 'index'],
                    ['Adicionar categoria', 'index'],
                ]
            );
            ?>

            <?= $this->Menu->treeView('fa fa-users', 'Usuários', 'users', [
                    ['Adicionar usuários', 'add'],
                    ['Gerenciar usuários', 'index'],
                ]
            );
            ?>

            <!--<?= $this->Menu->item('fa fa-sign-out', 'Sair', 'users', 'logout'); ?>-->
        </ul>
    </section>
</aside>