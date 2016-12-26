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
						<th>Name</th>
						<th>Name_link</th>
						<th>Link</th>
						<th>Category_typ</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($typs as $typ): ?>
						<tr>
							<td><?= $this->Number->format($typ->id) ?></td>
							<td><?= $typ->name ?></td>
							<td><?= $typ->name_link ?></td>
							<td><?= $typ->link ?></td>
							<td><?= $this->Number->format($typ->category_typ) ?></td>
							<td><?= $this->Html->link('Editar', ['action' => 'edit', $typ->id]) ?></td>
							<td><?= $this->Form->postLink('Deletar',
								['action' => 'delete', $typ->id],
								['confirm' => __('Tem certeza que deseja deletar o(a) typ {0}?', $typ->id)]) ?>
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