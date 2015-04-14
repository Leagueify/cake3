<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Source'), ['action' => 'edit', $source->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Source'), ['action' => 'delete', $source->id], ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="sources view large-10 medium-9 columns">
    <h2><?= h($source->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($source->name) ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($source->url) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($source->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($source->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($source->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('User Addable') ?></h6>
            <p><?= $source->user_addable ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Events') ?></h4>
    <?php if (!empty($source->events)): ?>
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
        <?php foreach ($source->events as $events): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Players') ?></h4>
    <?php if (!empty($source->players)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Source Id') ?></th>
            <th><?= __('Key') ?></th>
            <th><?= __('Handicap') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($source->players as $players): ?>
        <tr>
            <td><?= h($players->id) ?></td>
            <td><?= h($players->name) ?></td>
            <td><?= h($players->source_id) ?></td>
            <td><?= h($players->key) ?></td>
            <td><?= h($players->handicap) ?></td>
            <td><?= h($players->created) ?></td>
            <td><?= h($players->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Players', 'action' => 'edit', $players->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Players', 'action' => 'delete', $players->id], ['confirm' => __('Are you sure you want to delete # {0}?', $players->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
