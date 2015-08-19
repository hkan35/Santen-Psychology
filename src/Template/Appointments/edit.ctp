<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>



<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($appointment); ?>
    <fieldset>
        <legend><?= __('Edit Appointment') ?></legend>
        <?php
            echo $this->Form->input('datetime');
            echo $this->Form->input('note');
            echo $this->Form->input('confirm_status',['options' => ['no' => 'Not yet', 'pending' => 'Pending','confirmed' => 'Confirmed' ]
        ]);
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('appointmenttype_id', ['options' => $appointmenttypes, 'empty' => true]);
            echo $this->Form->input('invoice_id', ['options' => $invoices, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>

	<?= $this->Html->link('CANCEL',['controller' => 'Appointments', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
<!--<div style="text-align:right;">-->
	</div>
</div>
	





</body>
</html>