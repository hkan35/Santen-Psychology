<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>
<br><br>
<br><div class="payments form large-10 medium-9 columns">
    <?= $this->Form->create($payment); ?>
    <fieldset>
        <legend><?= __('Add Payment') ?></legend>
        <?php
            echo $this->Form->input('date',['type'=>'hidden']);
            echo $this->Form->input('amountPaid');
            echo $this->Form->input('invoice_id', ['options' => $invoices]);
            echo $this->Form->input('paymentType_id', ['options' => $paymenttypes]);
        ?>
    </fieldset>
  <?= $this->Html->link('CANCEL',['controller' => 'Payments', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>
</body>
</html>