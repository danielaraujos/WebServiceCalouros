<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return $schema->columnType($field) !== 'binary';
    });

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}

$textAreas = [];
%>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> <?= $subtitle ?> </h3>
    </div>
	
    <?= $this->Form->create($<%= $singularVar %>) ?>
        <div class="box-body">
<%
        foreach ($fields as $field) {
            if (in_array($field, $primaryKey)) {
                continue;
            }
            if (isset($keyFields[$field])) {
                $fieldData = $schema->column($field);
                if (!empty($fieldData['null'])) {
%>
            <div class="form-group">
				<?= $this->Form->input('<%= $field %>', ['class' => 'form-control', 'placeholder' => '', 'options' => $<%= $keyFields[$field] %>, 'empty' => true]); ?>
            </div>
<%
                } 
				else {
%>
			<div class="form-group">
				<?= $this->Form->input('<%= $field %>', ['class' => 'form-control', 'placeholder' => '', 'options' => $<%= $keyFields[$field] %>]) ?>
            </div>
<%
                }
                continue;
            }
            if (!in_array($field, ['created', 'modified', 'updated'])) {
                $fieldData = $schema->column($field);
                if (in_array($fieldData['type'], ['text'])) {
                    $textAreas[] = $field;
                }
                if (in_array($fieldData['type'], ['date', 'datetime', 'time']) && (!empty($fieldData['null']))) {
%>
			<div class="form-group">
				<?= $this->Form->input('<%= $field %>', ['class' => 'form-control', 'placeholder' => '', 'empty' => true]) ?>
            </div>
<%
                }
				else {
%>
			<div class="form-group">
				<?= $this->Form->input('<%= $field %>', ['class' => 'form-control', 'placeholder' => '']) ?>
            </div>
<%
                }
            }
        }
        if (!empty($associations['BelongsToMany'])) {
            foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
%>
			<div class="form-group">
				<?= $this->Form->input('<%= $assocData['property'] %>._ids', ['class' => 'form-control', 'placeholder' => '', 'options' => $<%= $assocData['variable'] %>]);
			</div>
<%
            }
        }
%>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <?= $this->Form->button(__('Salvar'), ["class" => "btn btn-primary"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div><!-- /.box -->

<?= $this->Html->script("//cdn.ckeditor.com/4.6.1/basic/ckeditor.js", ['block' => "scriptBottom"]); ?>
<?= $this->Html->scriptStart(['block' => "scriptBottom"]); ?>
$(function () {
<% foreach($textAreas as $t): %>
    CKEDITOR.replace('<%= $t %>');
<% endforeach; %>
});
<?= $this->Html->scriptEnd(); ?>