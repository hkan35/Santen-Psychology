<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Referrer'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="referrers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('doctorName') ?></th>
            <th><?= $this->Paginator->sort('doctorProviderNo') ?></th>
            <th><?= $this->Paginator->sort('clinic') ?></th>
            <th><?= $this->Paginator->sort('clinicPhone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($referrers as $referrer): ?>
        <tr>
            <td><?= $this->Number->format($referrer->id) ?></td>
            <td><?= h($referrer->date) ?></td>
            <td><?= h($referrer->type) ?></td>
            <td><?= h($referrer->doctorName) ?></td>
            <td><?= h($referrer->doctorProviderNo) ?></td>
            <td><?= h($referrer->clinic) ?></td>
            <td><?= h($referrer->clinicPhone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $referrer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $referrer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $referrer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referrer->id)]) ?>
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
