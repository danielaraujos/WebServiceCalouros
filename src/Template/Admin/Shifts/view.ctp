<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shift'), ['action' => 'edit', $shift->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shift'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transports'), ['controller' => 'Transports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transport'), ['controller' => 'Transports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shifts view large-9 medium-8 columns content">
    <h3><?= h($shift->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($shift->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($shift->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transports') ?></h4>
        <?php if (!empty($shift->transports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Image') ?></th>
                <th><?= __('Dir') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shift->transports as $transports): ?>
            <tr>
                <td><?= h($transports->id) ?></td>
                <td><?= h($transports->image) ?></td>
                <td><?= h($transports->dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transports', 'action' => 'view', $transports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transports', 'action' => 'edit', $transports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transports', 'action' => 'delete', $transports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
