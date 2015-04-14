<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Players Team'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="playersTeams index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('player_id') ?></th>
            <th><?= $this->Paginator->sort('team_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($playersTeams as $playersTeam): ?>
        <tr>
            <td><?= $this->Number->format($playersTeam->id) ?></td>
            <td>
                <?= $playersTeam->has('player') ? $this->Html->link($playersTeam->player->name, ['controller' => 'Players', 'action' => 'view', $playersTeam->player->id]) : '' ?>
            </td>
            <td>
                <?= $playersTeam->has('team') ? $this->Html->link($playersTeam->team->name, ['controller' => 'Teams', 'action' => 'view', $playersTeam->team->id]) : '' ?>
            </td>
            <td><?= h($playersTeam->created) ?></td>
            <td><?= h($playersTeam->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $playersTeam->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playersTeam->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playersTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playersTeam->id)]) ?>
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
