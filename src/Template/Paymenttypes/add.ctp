<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>
<br><br><br><br><br>
<div class="paymenttypes form large-10 medium-9 columns">
    <?= $this->Form->create($paymenttype); ?>
    <fieldset>
        <legend><?= __('Add Paymenttype') ?></legend>
        <?php
            echo $this->Form->input('Name');
        ?>
    </fieldset>
<?= $this->Html->link('CANCEL',['controller' => 'Paymenttypes', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>
</body>
</html>