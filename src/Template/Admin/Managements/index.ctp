<section>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= $subtitle ?> </h3>
        </div>

        <div class="box-body">
            <div style="margin: 10px 0px;">
                <?= $this->Html->link(
                    'Adicionar', ['action'=>'add'], ['class' => 'btn btn-primary']);
                ?>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
					<tr>
						<th>Id</th>
						<th>Função</th>
						<th>Nome</th>
						<th>Sala</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>Categoria</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($managements as $management): ?>
						<tr>
							<td><?= $this->Number->format($management->id) ?></td>
							<td><?= $management->function ?></td>
							<td><?= $management->name ?></td>
							<td><?= $management->room ?></td>
							<td><?= $management->email ?></td>
							<td><?= $management->phone ?></td>
							<td><?= $management->has('category_management') ? $this->Html->link($management->category_management->name, ['controller' => 'CategoryManagements', 'action' => 'view', $management->category_management->id]) : '' ?></td>
							<td><?= $this->Html->link('Editar', ['action' => 'edit', $management->id]) ?></td>
							<td><?= $this->Form->postLink('Deletar',
								['action' => 'delete', $management->id],
								['confirm' => __('Tem certeza que deseja deletar o(a) management {0}?', $management->id)]) ?>
							</td>
						</tr>
                	<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->Html->css("//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css", ['block' => "scriptBottom"]); ?>
<?= $this->Html->script("//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js", ['block' => "scriptBottom"]); ?>
<?= $this->Html->scriptStart(['block' => "scriptBottom"]); ?>
    $(document).ready(function(){
    $('table').DataTable( {
    "language": { "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json" }
    } );
    });
<?= $this->Html->scriptEnd(); ?>
<?= $this->Form->end() ?>