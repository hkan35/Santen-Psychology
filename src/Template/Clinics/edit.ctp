<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>

<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($clinic); ?>
    <fieldset>
        <legend><?= __('Edit Clinic') ?></legend>
        <?php
              echo $this->Form->input('clinic_name');
            echo $this->Form->input('clinic_phone');
            echo $this->Form->input('clinic_email');
            echo $this->Form->input('clinic_address');
            echo $this->Form->input('clinic_postal_address');
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<!--<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>--!>

	<?= $this->Html->link('CANCEL',['controller' => 'Clinics', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
<!--<div style="text-align:right;">-->
	</div>
</div>

</body>
</html>