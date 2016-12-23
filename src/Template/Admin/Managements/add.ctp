<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($management) ?>
        <div class="box-body">
			<div class="form-group">
				<?= $this->Form->input('function', ['label' => 'Função','class' => 'form-control', 'placeholder' => 'Digite a função']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('name', ['label' => 'Nome','class' => 'form-control', 'placeholder' => 'Digite o nome']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('room', ['label' => 'Sala','class' => 'form-control', 'placeholder' => 'Digite o número da sala']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('email', ['label' => 'Email','class' => 'form-control', 'placeholder' => 'Digite o email']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('phone', ['label' => 'Telefone','class' => 'form-control', 'placeholder' => 'Digite o número telefônico']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('category_management_id', ['label' => 'Categoria','class' => 'form-control', 'placeholder' => '', 'options' => $categoryManagements]) ?>
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