<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tags view large-10 medium-9 columns">
    <h2><?= h($tag->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($tag->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tag->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($tag->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($tag->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Leagues') ?></h4>
    <?php if (!empty($tag->leagues)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Logo') ?></th>
            <th><?= __('Motto') ?></th>
            <th><?= __('Started') ?></th>
            <th><?= __('Event Id') ?></th>
            <th><?= __('Public') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tag->leagues as $leagues): ?>
        <tr>
            <td><?= h($leagues->id) ?></td>
            <td><?= h($leagues->name) ?></td>
            <td><?= h($leagues->logo) ?></td>
            <td><?= h($leagues->motto) ?></td>
            <td><?= h($leagues->started) ?></td>
            <td><?= h($leagues->event_id) ?></td>
            <td><?= h($leagues->public) ?></td>
            <td><?= h($leagues->created) ?></td>
            <td><?= h($leagues->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Leagues', 'action' => 'view', $leagues->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Leagues', 'action' => 'edit', $leagues->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leagues', 'action' => 'delete', $leagues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leagues->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
