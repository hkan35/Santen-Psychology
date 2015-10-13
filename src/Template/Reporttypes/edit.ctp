<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>
<br><br><br><br>
<div class="reporttypes form large-10 medium-9 columns">
    <?= $this->Form->create($reporttype); ?>
    <fieldset>
        <legend><?= __('Edit Reporttype') ?></legend>
        <?php
            echo $this->Form->input('reportTypeName');
        ?>
    </fieldset>
     <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<!--<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>--!>

	<?= $this->Html->link('CANCEL',['controller' => 'Reporttypes', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
</div>
</body>
</html>