<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($transport,['type'=>'file']) ?>
        <div class="box-body">
            <div class="form-group">
                <?= $this->Form->input(
                'image', [
                'class' => 'form-control',
                'label' => 'Foto de Perfil (Tamanho recomendado: )',
                'type' => 'file',
                'onChange' => "$('#imagePreview')[0].src = window.URL.createObjectURL(this.files[0])"
                ]
                );?>
            </div>
            <div class="form-group">
                <label>Pré-visualizar: </label><br>
                <?php
			        echo $this->Html->Image( $transport->thumbnailLink, [
                'id' => 'imagePreview',
                'style' => 'max-width: 350px; max-height: 350px',
                'alt' => 'Imagem de transporte'
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
});
<?= $this->Html->scriptEnd(); ?>