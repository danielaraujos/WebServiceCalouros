<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>

    <?= $this->Form->create($telephone) ?>
    <div class="box-body">
        <div class="form-group">
            <?= $this->Form->input('name', ['label' => 'Nome','class' => 'form-control', 'placeholder' => 'Digite o nome']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('sector', ['label' => 'Setor','class' => 'form-control', 'placeholder' => 'Digite o setor']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('phone', ['label' => 'Número Telefonico','class' => 'form-control', 'placeholder' => 'Digite o número telefonico']) ?>
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