<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($schedule) ?>
        <div class="box-body">
			<div class="form-group">
				<?= $this->Form->input('ida', ['class' => 'form-control', 'placeholder' => '']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('intervalo', ['class' => 'form-control', 'placeholder' => '']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('volta', ['class' => 'form-control', 'placeholder' => '']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('shifts_id', ['class' => 'form-control', 'placeholder' => '', 'options' => $shifts]) ?>
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