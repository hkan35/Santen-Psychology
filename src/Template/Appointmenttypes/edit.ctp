<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>

<div class="appointmenttypes form large-10 medium-9 columns">
    <?= $this->Form->create($appointmenttype); ?>
    <fieldset>
        <legend><?= __('Edit Appointmenttype') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('full_cost');
          
			echo "Medicare Rebatable<br> "; echo $this->Form->checkbox('medicare_rebatable',['value' => 'Y', 'hiddenField' =>'N']);
            echo $this->Form->input('rebate_amount');
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<!--<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>--!>

	<?= $this->Html->link('CANCEL',['controller' => 'Appointmenttypes', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
    
</body>
</html>