<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Building'), ['action' => 'edit', $building->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Building'), ['action' => 'delete', $building->id], ['confirm' => __('Are you sure you want to delete # {0}?', $building->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buildings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Building'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="buildings view large-9 medium-8 columns content">
    <h3><?= h($building->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($building->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Sub Name') ?></th>
            <td><?= h($building->sub_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($building->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Dir') ?></th>
            <td><?= h($building->dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Credits') ?></th>
            <td><?= h($building->credits) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($building->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($building->body)); ?>
    </div>
</div>
