<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>
</head>
<body>

<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($clinic); ?><br><br><br>
    <fieldset>
	
        <legend><?= __('Add Clinic') ?></legend>
        <?php
            echo $this->Form->input('clinic_name');
            echo $this->Form->input('clinic_phone');
            echo $this->Form->input('clinic_email');
            echo $this->Form->input('clinic_address');
            echo $this->Form->input('clinic_postal_address');
			
        ?>
    </fieldset>
    
	<span></span>
	<?= $this->Html->link('CANCEL',['controller' => 'Clinics', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>


</body>
</html>
