<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>

<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($invoice); ?>
    <fieldset>
        <legend><?= __('Edit Invoices') ?></legend>
        <?php
              echo $this->Form->input('date');
            echo $this->Form->input('dueDate');
            echo $this->Form->input('amount');
            echo $this->Form->input('medicareRebate');
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
	<!--<?= $this->Form->create('cancel', [
    'url' => ['controller' => 'Appointments', 'action' => 'index']
])?>--!>

	<?= $this->Html->link('CANCEL',['controller' => 'Invoices', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
<!--<div style="text-align:right;">-->
	</div>
</div>

</body>
</html>
