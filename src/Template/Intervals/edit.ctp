<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $interval->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $interval->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Intervals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="intervals form large-10 medium-9 columns">
    <?= $this->Form->create($interval); ?>
    <fieldset>
        <legend><?= __('Edit Interval') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
