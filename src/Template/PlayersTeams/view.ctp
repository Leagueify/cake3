<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Players Team'), ['action' => 'edit', $playersTeam->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Players Team'), ['action' => 'delete', $playersTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playersTeam->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Players Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="playersTeams view large-10 medium-9 columns">
    <h2><?= h($playersTeam->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Player') ?></h6>
            <p><?= $playersTeam->has('player') ? $this->Html->link($playersTeam->player->name, ['controller' => 'Players', 'action' => 'view', $playersTeam->player->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Team') ?></h6>
            <p><?= $playersTeam->has('team') ? $this->Html->link($playersTeam->team->name, ['controller' => 'Teams', 'action' => 'view', $playersTeam->team->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($playersTeam->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($playersTeam->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($playersTeam->modified) ?></p>
        </div>
    </div>
</div>
