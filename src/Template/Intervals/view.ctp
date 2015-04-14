<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Interval'), ['action' => 'edit', $interval->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Interval'), ['action' => 'delete', $interval->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interval->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Intervals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Interval'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="intervals view large-10 medium-9 columns">
    <h2><?= h($interval->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($interval->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($interval->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($interval->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($interval->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Events') ?></h4>
    <?php if (!empty($interval->events)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Source Id') ?></th>
            <th><?= __('Interval Id') ?></th>
            <th><?= __('Last Update') ?></th>
            <th><?= __('Last Error') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($interval->events as $events): ?>
        <tr>
            <td><?= h($events->id) ?></td>
            <td><?= h($events->name) ?></td>
            <td><?= h($events->source_id) ?></td>
            <td><?= h($events->interval_id) ?></td>
            <td><?= h($events->last_update) ?></td>
            <td><?= h($events->last_error) ?></td>
            <td><?= h($events->created) ?></td>
            <td><?= h($events->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
