<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Paymenttype'), ['action' => 'edit', $paymenttype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paymenttype'), ['action' => 'delete', $paymenttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymenttype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paymenttypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paymenttype'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="paymenttypes view large-10 medium-9 columns">
    <h2><?= h($paymenttype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($paymenttype->Name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($paymenttype->id) ?></p>
        </div>
    </div>
</div>
