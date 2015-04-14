<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $point->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $point->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Points'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="points form large-10 medium-9 columns">
    <?= $this->Form->create($point); ?>
    <fieldset>
        <legend><?= __('Edit Point') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('player_id', ['options' => $players, 'empty' => true]);
            echo $this->Form->input('value');
            echo $this->Form->input('when');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
