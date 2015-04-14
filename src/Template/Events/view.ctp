<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Intervals'), ['controller' => 'Intervals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Interval'), ['controller' => 'Intervals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="events view large-10 medium-9 columns">
    <h2><?= h($event->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($event->name) ?></p>
            <h6 class="subheader"><?= __('Source') ?></h6>
            <p><?= $event->has('source') ? $this->Html->link($event->source->name, ['controller' => 'Sources', 'action' => 'view', $event->source->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Interval') ?></h6>
            <p><?= $event->has('interval') ? $this->Html->link($event->interval->name, ['controller' => 'Intervals', 'action' => 'view', $event->interval->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Last Error') ?></h6>
            <p><?= h($event->last_error) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($event->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Last Update') ?></h6>
            <p><?= h($event->last_update) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($event->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($event->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Leagues') ?></h4>
    <?php if (!empty($event->leagues)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Logo') ?></th>
            <th><?= __('Motto') ?></th>
            <th><?= __('Started') ?></th>
            <th><?= __('Event Id') ?></th>
            <th><?= __('Public') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($event->leagues as $leagues): ?>
        <tr>
            <td><?= h($leagues->id) ?></td>
            <td><?= h($leagues->name) ?></td>
            <td><?= h($leagues->logo) ?></td>
            <td><?= h($leagues->motto) ?></td>
            <td><?= h($leagues->started) ?></td>
            <td><?= h($leagues->event_id) ?></td>
            <td><?= h($leagues->public) ?></td>
            <td><?= h($leagues->created) ?></td>
            <td><?= h($leagues->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Leagues', 'action' => 'view', $leagues->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Leagues', 'action' => 'edit', $leagues->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leagues', 'action' => 'delete', $leagues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leagues->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
