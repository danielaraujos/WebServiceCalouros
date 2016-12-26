<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>

    <?= $this->Form->create($place) ?>
    <div class="box-body">
        <div class="form-group">
            <?= $this->Form->input('title', ['label' => 'Ponto','class' => 'form-control',  'placeholder' => 'Digite nome do ponto']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('body', ['label' => 'Conteudo','class' => 'form-control', 'placeholder' => '']) ?>
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