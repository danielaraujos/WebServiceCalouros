<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>

    <?= $this->Form->create($benefit,['type'=>'file']) ?>
    <div class="box-body">
        <div class="form-group">
            <?= $this->Form->input('title', ['label' => 'Nome','class' => 'form-control', 'placeholder' => 'Digite o nome do beneficio']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('sub_title', ['label' => 'Resumo','class' => 'form-control', 'placeholder' => 'Digite um resumo para sub titulo']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('body', ['label' => 'Conteudo','class' => 'form-control', 'placeholder' => '']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('link', ['label' => 'Link','class' => 'form-control', 'placeholder' => 'Digite o link externo']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input(
            'image', [
            'class' => 'form-control',
            'label' => 'Imagem do beneficio (Tamanho recomendado: XxX)',
            'type' => 'file',
            'onChange' => "$('#imagePreview')[0].src = window.URL.createObjectURL(this.files[0])"
            ]
            );?>
        </div>
        <div class="form-group">
            <label>Pré-visualizar: </label><br>
            <?php
			        echo $this->Html->Image( $benefit->thumbnailLink, [
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