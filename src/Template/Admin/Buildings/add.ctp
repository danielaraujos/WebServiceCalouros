<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>

    <?= $this->Form->create($building, ['type'=>'file']) ?>
        <div class="box-body">
			<div class="form-group">
				<?= $this->Form->input('name', ['label'=>'Siglas','class' => 'form-control', 'placeholder' => 'Digite as Siglas']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('sub_name', ['label'=>'Nome','sub_name','class' => 'form-control', 'placeholder' => 'Digite o nome do edifício']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('body', ['label'=>'Descrição','class' => 'form-control', 'placeholder' => '']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('credits', ['label'=>'Créditos pela Foto','class' => 'form-control', 'placeholder' => 'Digite o nome do fotografo']) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->input(
                'image', [
                'class' => 'form-control',
                'label' => 'Foto do edifício (Tamanho recomendado: XxX)',
                'type' => 'file',
                'onChange' => "$('#imagePreview')[0].src = window.URL.createObjectURL(this.files[0])"
                ]
                );?>
            </div>
            <div class="form-group">
                <label>Pré-visualizar: </label><br>
                <?php
			        echo $this->Html->Image( $building->thumbnailLink, [
                'id' => 'imagePreview',
                'style' => 'max-width: 350px; max-height: 350px',
                'alt' => 'Imagem para Banner'
                ] );
                ?>
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