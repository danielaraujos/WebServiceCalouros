<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($user,['type'=>'file']) ?>
        <div class="box-body">
			<div class="form-group">
				<?= $this->Form->input('name', ['label'=>'Nome','class' => 'form-control', 'placeholder' => 'Digite seu nome']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('email', ['label'=>'E-mail','class' => 'form-control', 'placeholder' => 'Digite seu email']) ?>
            </div>
			<div class="form-group">
				<?= $this->Form->input('password', ['label'=>'Senha','class' => 'form-control', 'placeholder' => 'Digite sua senha']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input(
                'image', [
                'class' => 'form-control',
                'label' => 'Foto de Perfil (Tamanho recomendado: 160x160)',
                'type' => 'file',
                'onChange' => "$('#imagePreview')[0].src = window.URL.createObjectURL(this.files[0])"
                ]
                );?>
            </div>
            <div class="form-group">
                <label>Pré-visualizar: </label><br>
                <?php
			echo $this->Html->Image( $user->thumbnailLink, [
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
});
<?= $this->Html->scriptEnd(); ?>