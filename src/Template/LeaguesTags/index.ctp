<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Leagues Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leaguesTags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tag_id') ?></th>
            <th><?= $this->Paginator->sort('league_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($leaguesTags as $leaguesTag): ?>
        <tr>
            <td><?= $this->Number->format($leaguesTag->id) ?></td>
            <td>
                <?= $leaguesTag->has('tag') ? $this->Html->link($leaguesTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $leaguesTag->tag->id]) : '' ?>
            </td>
            <td>
                <?= $leaguesTag->has('league') ? $this->Html->link($leaguesTag->league->name, ['controller' => 'Leagues', 'action' => 'view', $leaguesTag->league->id]) : '' ?>
            </td>
            <td><?= h($leaguesTag->created) ?></td>
            <td><?= h($leaguesTag->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $leaguesTag->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leaguesTag->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leaguesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaguesTag->id)]) ?>
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
