<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typ'), ['action' => 'edit', $typ->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typ'), ['action' => 'delete', $typ->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typ->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typ'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typs view large-9 medium-8 columns content">
    <h3><?= h($typ->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($typ->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Name Link') ?></th>
            <td><?= h($typ->name_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($typ->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($typ->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Category Typ') ?></th>
            <td><?= $this->Number->format($typ->category_typ) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($typ->body)); ?>
    </div>
</div>
