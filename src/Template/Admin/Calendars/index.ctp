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
						<th>Mês</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($calendars as $calendar): ?>
						<tr>
							<td><?= $this->Number->format($calendar->id) ?></td>
							<td><?= $calendar->name ?></td>
							<td><?= $calendar->has('month_calendar') ? $this->Html->link($calendar->month_calendar->name, ['controller' => 'MonthCalendars', 'action' => 'edit', $calendar->month_calendar->id]) : '' ?></td>
							<td><?= $this->Html->link('Editar', ['action' => 'edit', $calendar->id]) ?></td>
							<td><?= $this->Form->postLink('Deletar',
								['action' => 'delete', $calendar->id],
								['confirm' => __('Tem certeza que deseja deletar o(a) calendar {0}?', $calendar->id)]) ?>
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