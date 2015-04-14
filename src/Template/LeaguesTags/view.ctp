<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Leagues Tag'), ['action' => 'edit', $leaguesTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Leagues Tag'), ['action' => 'delete', $leaguesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaguesTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leagues Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leagues Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leaguesTags view large-10 medium-9 columns">
    <h2><?= h($leaguesTag->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $leaguesTag->has('tag') ? $this->Html->link($leaguesTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $leaguesTag->tag->id]) : '' ?></p>
            <h6 class="subheader"><?= __('League') ?></h6>
            <p><?= $leaguesTag->has('league') ? $this->Html->link($leaguesTag->league->name, ['controller' => 'Leagues', 'action' => 'view', $leaguesTag->league->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($leaguesTag->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($leaguesTag->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($leaguesTag->modified) ?></p>
        </div>
    </div>
</div>
