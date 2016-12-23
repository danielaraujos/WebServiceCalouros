<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Management'), ['action' => 'edit', $management->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Management'), ['action' => 'delete', $management->id], ['confirm' => __('Are you sure you want to delete # {0}?', $management->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Managements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Management'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Managements'), ['controller' => 'CategoryManagements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Management'), ['controller' => 'CategoryManagements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="managements view large-9 medium-8 columns content">
    <h3><?= h($management->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Function') ?></th>
            <td><?= h($management->function) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($management->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Room') ?></th>
            <td><?= h($management->room) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($management->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($management->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Category Management') ?></th>
            <td><?= $management->has('category_management') ? $this->Html->link($management->category_management->name, ['controller' => 'CategoryManagements', 'action' => 'view', $management->category_management->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($management->id) ?></td>
        </tr>
    </table>
</div>
