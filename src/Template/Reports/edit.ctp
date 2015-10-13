<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>

<div class="reports form large-10 medium-9 columns">
    <?= $this->Form->create($report); ?>
    <fieldset>
        <legend><?= __('Edit Report') ?></legend>
        <?php
            echo $this->Form->input('date_created');
            echo $this->Form->input('reportLocation');
            echo $this->Form->input('users_id');
            echo $this->Form->input('reportType_id', ['options' => $reporttypes]);
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<!--<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>--!>

	<?= $this->Html->link('CANCEL',['controller' => 'Reports', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
    </div>
</div>

</body>
</html>