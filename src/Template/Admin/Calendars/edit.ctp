<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>

    <?= $this->Form->create($calendar) ?>
    <div class="box-body">
        <div class="form-group">
            <?= $this->Form->input('name', ['label'=>'Nome do evento','class' => 'form-control', 'placeholder' => 'Digite o nome do evento']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('month_calendar_id', ['label'=>'Mês do ano','class' => 'form-control', 'placeholder' => '', 'options' => $monthCalendars]) ?>
        </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <?= $this->Form->button(__('Salvar'), ["class" => "btn btn-primary"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div><!-- /.box -->

<?= $this->Html->script("//cdn.ckeditor.com/4.6.1/basic/ckeditor.js", ['block' => "scriptBottom"]); ?>
<?= $this->Html->scriptStart(['block' => "scriptBottom"]); ?>
$(function () {
});
<?= $this->Html->scriptEnd(); ?>