<?php
$class = 'alert alert-info alert-dismissible';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-info"></i> Aviso </h4>
    <?= h($message) ?>
</div>