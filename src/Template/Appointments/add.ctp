<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>

<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($appointment); ?><br><br><br>
    <fieldset>
	
        <legend><?= __('Add Appointment') ?></legend>
        <?php
              echo $this->Form->input('datetime');
            echo $this->Form->input('note');
            /*echo $this->Form->input('confirm_status');*/
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('appointment type', ['options' => $appointmenttypes, 'empty' => true]);
			
			/*echo $this->Html->Link('Full Cost', [$appointmenttypes->id]);*/
		
            /*echo $this->Form->input('invoice_id', ['options' => $invoices, 'empty' => true]);*/
        ?>
    </fieldset>
    
	<span></span>
	<?= $this->Html->link('CANCEL',['controller' => 'Appointments', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>


</body>
</html>