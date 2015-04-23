<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Paymenttype'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="paymenttypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($paymenttypes as $paymenttype): ?>
        <tr>
            <td><?= $this->Number->format($paymenttype->id) ?></td>
            <td><?= h($paymenttype->Name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $paymenttype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymenttype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymenttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymenttype->id)]) ?>
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
