<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category Management'), ['action' => 'edit', $categoryManagement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category Management'), ['action' => 'delete', $categoryManagement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryManagement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category Managements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Management'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managements'), ['controller' => 'Managements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Management'), ['controller' => 'Managements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoryManagements view large-9 medium-8 columns content">
    <h3><?= h($categoryManagement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($categoryManagement->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoryManagement->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Managements') ?></h4>
        <?php if (!empty($categoryManagement->managements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Function') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Room') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Category Management Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoryManagement->managements as $managements): ?>
            <tr>
                <td><?= h($managements->id) ?></td>
                <td><?= h($managements->function) ?></td>
                <td><?= h($managements->name) ?></td>
                <td><?= h($managements->room) ?></td>
                <td><?= h($managements->email) ?></td>
                <td><?= h($managements->phone) ?></td>
                <td><?= h($managements->category_management_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Managements', 'action' => 'view', $managements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Managements', 'action' => 'edit', $managements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Managements', 'action' => 'delete', $managements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $managements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
