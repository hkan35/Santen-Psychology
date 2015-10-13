<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>
<br><br><br>
<div class="reporttypes form large-10 medium-9 columns">
    <?= $this->Form->create($reporttype); ?>
    <fieldset>
        <legend><?= __('Add Reporttype') ?></legend>
        <?php
            echo $this->Form->input('reportTypeName');
        ?>
    </fieldset>
    <?= $this->Html->link('CANCEL',['controller' => 'Reporttypes', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>
</body>
</html>