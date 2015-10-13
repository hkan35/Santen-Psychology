<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>
<br><br><br><br><br>
<div class="paymenttypes form large-10 medium-9 columns">
    <?= $this->Form->create($paymenttype); ?>
    <fieldset>
        <legend><?= __('Edit Paymenttype') ?></legend>
        <?php
            echo $this->Form->input('Name');
        ?>
    </fieldset>
 <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<!--<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>--!>

	<?= $this->Html->link('CANCEL',['controller' => 'Paymenttypes', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
</div>
</body>
</html>