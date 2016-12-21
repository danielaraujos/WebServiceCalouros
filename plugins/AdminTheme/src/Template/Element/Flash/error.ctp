<?php
$class = 'alert alert-danger alert-dismissible';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Erro </h4>
    <?= h($message) ?>
</div>