<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New League'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leagues index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('logo') ?></th>
            <th><?= $this->Paginator->sort('motto') ?></th>
            <th><?= $this->Paginator->sort('started') ?></th>
            <th><?= $this->Paginator->sort('event_id') ?></th>
            <th><?= $this->Paginator->sort('public') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($leagues as $league): ?>
        <tr>
            <td><?= $this->Number->format($league->id) ?></td>
            <td><?= h($league->name) ?></td>
            <td><?= h($league->logo) ?></td>
            <td><?= h($league->motto) ?></td>
            <td><?= h($league->started) ?></td>
            <td>
                <?= $league->has('event') ? $this->Html->link($league->event->name, ['controller' => 'Events', 'action' => 'view', $league->event->id]) : '' ?>
            </td>
            <td><?= h($league->public) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $league->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $league->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $league->id], ['confirm' => __('Are you sure you want to delete # {0}?', $league->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
