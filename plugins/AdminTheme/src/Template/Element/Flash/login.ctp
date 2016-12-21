<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<p class="<?= h($class) ?>"><?= h($message) ?></p>