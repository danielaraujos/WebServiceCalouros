<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transports'), ['controller' => 'Transports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transport'), ['controller' => 'Transports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schedules view large-9 medium-8 columns content">
    <h3><?= h($schedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ida') ?></th>
            <td><?= h($schedule->ida) ?></td>
        </tr>
        <tr>
            <th><?= __('Intervalo') ?></th>
            <td><?= h($schedule->intervalo) ?></td>
        </tr>
        <tr>
            <th><?= __('Volta') ?></th>
            <td><?= h($schedule->volta) ?></td>
        </tr>
        <tr>
            <th><?= __('Shift') ?></th>
            <td><?= $schedule->has('shift') ? $this->Html->link($schedule->shift->name, ['controller' => 'Shifts', 'action' => 'view', $schedule->shift->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($schedule->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transports') ?></h4>
        <?php if (!empty($schedule->transports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Image') ?></th>
                <th><?= __('Dir') ?></th>
                <th><?= __('Shift Id') ?></th>
                <th><?= __('Schedule Id') ?></th>
                <th><?= __('Places Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($schedule->transports as $transports): ?>
            <tr>
                <td><?= h($transports->id) ?></td>
                <td><?= h($transports->image) ?></td>
                <td><?= h($transports->dir) ?></td>
                <td><?= h($transports->shift_id) ?></td>
                <td><?= h($transports->schedule_id) ?></td>
                <td><?= h($transports->places_id) ?></td>
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
