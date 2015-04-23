<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="payments index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('amountPaid') ?></th>
            <th><?= $this->Paginator->sort('invoice') ?></th>
            <th><?= $this->Paginator->sort('paymentType') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($payments as $payment): ?>
        <tr>
            <td><?= $this->Number->format($payment->id) ?></td>
            <td><?= h($payment->date) ?></td>
            <td><?= $this->Number->format($payment->amountPaid) ?></td>
            <td><?= $this->Number->format($payment->invoice) ?></td>
            <td><?= $this->Number->format($payment->paymentType) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $payment->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?>
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
