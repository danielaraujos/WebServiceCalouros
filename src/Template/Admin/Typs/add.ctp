<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"> <?= $subtitle ?> </h3>
        </div>

        <?= $this->Form->create($typ) ?>
        <div class="box-body">
            <div class="form-group">
                <?= $this->Form->input('name', ['label' => 'Nome','class' => 'form-control', 'placeholder' => 'Digite o nome']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('body', ['label' => 'Conteúdo','class' => 'form-control', 'placeholder' => 'Digite o conteudo']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('name_link', ['label' => 'Nome do link externo','class' => 'form-control', 'placeholder' => 'Digite o nome do link se existir']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('link', ['label' => 'Link externo','class' => 'form-control', 'placeholder' => 'Digite o link do externo se existir']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('category_typ_id', ['label' => 'Categoria','class' => 'form-control', 'placeholder' => '', 'options' => $categoryTyps]) ?>
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
    CKEDITOR.replace('body');
});
<?= $this->Html->scriptEnd(); ?>