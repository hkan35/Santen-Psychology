<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paymenttypes'), ['controller' => 'Paymenttypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paymenttype'), ['controller' => 'Paymenttypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="payments view large-10 medium-9 columns">
    <h2><?= h($payment->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Invoice') ?></h6>
            <p><?= $payment->has('invoice') ? $this->Html->link($payment->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $payment->invoice->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Paymenttype') ?></h6>
            <p><?= $payment->has('paymenttype') ? $this->Html->link($payment->paymenttype->id, ['controller' => 'Paymenttypes', 'action' => 'view', $payment->paymenttype->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($payment->id) ?></p>
            <h6 class="subheader"><?= __('AmountPaid') ?></h6>
            <p><?= $this->Number->format($payment->amountPaid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($payment->date) ?></p>
        </div>
    </div>
</div>
