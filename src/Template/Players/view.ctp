<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Points'), ['controller' => 'Points', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Point'), ['controller' => 'Points', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="players view large-10 medium-9 columns">
    <h2><?= h($player->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($player->name) ?></p>
            <h6 class="subheader"><?= __('Source') ?></h6>
            <p><?= $player->has('source') ? $this->Html->link($player->source->name, ['controller' => 'Sources', 'action' => 'view', $player->source->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Key') ?></h6>
            <p><?= h($player->key) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($player->id) ?></p>
            <h6 class="subheader"><?= __('Handicap') ?></h6>
            <p><?= $this->Number->format($player->handicap) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($player->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($player->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Points') ?></h4>
    <?php if (!empty($player->points)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Player Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('When') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($player->points as $points): ?>
        <tr>
            <td><?= h($points->id) ?></td>
            <td><?= h($points->name) ?></td>
            <td><?= h($points->player_id) ?></td>
            <td><?= h($points->value) ?></td>
            <td><?= h($points->when) ?></td>
            <td><?= h($points->created) ?></td>
            <td><?= h($points->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Points', 'action' => 'view', $points->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Points', 'action' => 'edit', $points->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Points', 'action' => 'delete', $points->id], ['confirm' => __('Are you sure you want to delete # {0}?', $points->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Teams') ?></h4>
    <?php if (!empty($player->teams)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('League Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($player->teams as $teams): ?>
        <tr>
            <td><?= h($teams->id) ?></td>
            <td><?= h($teams->name) ?></td>
            <td><?= h($teams->league_id) ?></td>
            <td><?= h($teams->user_id) ?></td>
            <td><?= h($teams->created) ?></td>
            <td><?= h($teams->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
