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
						<th>Nome</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($categoryManagements as $categoryManagement): ?>
						<tr>
							<td><?= $this->Number->format($categoryManagement->id) ?></td>
							<td><?= $categoryManagement->name ?></td>
							<td><?= $this->Html->link('Editar', ['action' => 'edit', $categoryManagement->id]) ?></td>
							<td><?= $this->Form->postLink('Deletar',
								['action' => 'delete', $categoryManagement->id],
								['confirm' => __('Tem certeza que deseja deletar o(a) categoryManagement {0}?', $categoryManagement->id)]) ?>
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