<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Point'), ['action' => 'edit', $point->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Point'), ['action' => 'delete', $point->id], ['confirm' => __('Are you sure you want to delete # {0}?', $point->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Points'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Point'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="points view large-10 medium-9 columns">
    <h2><?= h($point->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($point->name) ?></p>
            <h6 class="subheader"><?= __('Player') ?></h6>
            <p><?= $point->has('player') ? $this->Html->link($point->player->name, ['controller' => 'Players', 'action' => 'view', $point->player->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($point->id) ?></p>
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= $this->Number->format($point->value) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('When') ?></h6>
            <p><?= h($point->when) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($point->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($point->modified) ?></p>
        </div>
    </div>
</div>
