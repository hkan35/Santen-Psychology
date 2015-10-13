<html>
<head>

<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>
<br>
<br>
<div class="payments view large-10 medium-9 columns">
    <h2><?= h($payment->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Invoice') ?></h6>
            <p><?= $payment->has('invoice') ? $this->Html->link($payment->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $payment->invoice->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Paymenttype') ?></h6>
            <p><?= $payment->has('paymenttype') ? $this->Html->link($payment->paymenttype->Name, ['controller' => 'Paymenttypes', 'action' => 'view', $payment->paymenttype->id]) : '' ?></p>
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
    <br><br> <?= $this->Html->link('Back to index',['controller' => 'Payments', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
</div>
</body>
</html>