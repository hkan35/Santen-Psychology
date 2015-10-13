<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>
<br><br>
<div class="payments form large-10 medium-9 columns">
    <?= $this->Form->create($payment); ?>
    <fieldset>
        <legend><?= __('Edit Payment') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('amountPaid');
            echo $this->Form->input('invoice_id', ['options' => $invoices]);
            echo $this->Form->input('paymentType_id', ['options' => $paymenttypes]);
        ?>
    </fieldset>
   <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<!--<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>--!>

	<?= $this->Html->link('CANCEL',['controller' => 'Payments', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
</div>
</body>
</html>