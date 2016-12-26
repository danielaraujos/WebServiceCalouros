<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transport'), ['action' => 'edit', $transport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transport'), ['action' => 'delete', $transport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transport'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transports view large-9 medium-8 columns content">
    <h3><?= h($transport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($transport->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Dir') ?></th>
            <td><?= h($transport->dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($transport->id) ?></td>
        </tr>
    </table>
</div>
