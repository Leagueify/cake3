<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $playersTeam->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $playersTeam->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Players Teams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="playersTeams form large-10 medium-9 columns">
    <?= $this->Form->create($playersTeam); ?>
    <fieldset>
        <legend><?= __('Edit Players Team') ?></legend>
        <?php
            echo $this->Form->input('player_id', ['options' => $players, 'empty' => true]);
            echo $this->Form->input('team_id', ['options' => $teams, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
