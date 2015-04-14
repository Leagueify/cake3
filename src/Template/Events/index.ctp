<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Intervals'), ['controller' => 'Intervals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Interval'), ['controller' => 'Intervals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="events index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('source_id') ?></th>
            <th><?= $this->Paginator->sort('interval_id') ?></th>
            <th><?= $this->Paginator->sort('last_update') ?></th>
            <th><?= $this->Paginator->sort('last_error') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($events as $event): ?>
        <tr>
            <td><?= $this->Number->format($event->id) ?></td>
            <td><?= h($event->name) ?></td>
            <td>
                <?= $event->has('source') ? $this->Html->link($event->source->name, ['controller' => 'Sources', 'action' => 'view', $event->source->id]) : '' ?>
            </td>
            <td>
                <?= $event->has('interval') ? $this->Html->link($event->interval->name, ['controller' => 'Intervals', 'action' => 'view', $event->interval->id]) : '' ?>
            </td>
            <td><?= h($event->last_update) ?></td>
            <td><?= h($event->last_error) ?></td>
            <td><?= h($event->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
