<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $leaguesTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $leaguesTag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Leagues Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leaguesTags form large-10 medium-9 columns">
    <?= $this->Form->create($leaguesTag); ?>
    <fieldset>
        <legend><?= __('Edit Leagues Tag') ?></legend>
        <?php
            echo $this->Form->input('tag_id', ['options' => $tags, 'empty' => true]);
            echo $this->Form->input('league_id', ['options' => $leagues, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
