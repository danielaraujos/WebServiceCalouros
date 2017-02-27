<section>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= $subtitle ?> </h3>
        </div>

        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
					<tr>
						<th>Id</th>
						<th>Nome da API</th>
						<th>Descrição</th>
						<th>Visualizar</th>
						<!--<th>Editar</th>-->
						<!--<th>Deletar</th>-->
					</tr>
				</thead>
				<tbody>
					<?php foreach ($apis as $api): ?>
						<tr>
							<td><?= $this->Number->format($api->id) ?></td>
							<td><?= $api->name ?></td>
							<td><?= $api->description ?></td>
							<td><?= $this->Html->link('Visualizar','http://danielaraujos.com/webservicecalouros/api/v1/'.$api->link,['target'=>'_black']) ?></td>

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