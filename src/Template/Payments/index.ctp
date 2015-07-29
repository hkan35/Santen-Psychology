<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paymenttypes'), ['controller' => 'Paymenttypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paymenttype'), ['controller' => 'Paymenttypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="payments index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('amountPaid') ?></th>
            <th><?= $this->Paginator->sort('invoice_id') ?></th>
            <th><?= $this->Paginator->sort('paymentType_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($payments as $payment): ?>
        <tr>
            <td><?= $this->Number->format($payment->id) ?></td>
            <td><?= h($payment->date) ?></td>
            <td><?= $this->Number->format($payment->amountPaid) ?></td>
            <td>
                <?= $payment->has('invoice') ? $this->Html->link($payment->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $payment->invoice->id]) : '' ?>
            </td>
            <td>
                <?= $payment->has('paymenttype') ? $this->Html->link($payment->paymenttype->id, ['controller' => 'Paymenttypes', 'action' => 'view', $payment->paymenttype->id]) : '' ?>
            </td>
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
