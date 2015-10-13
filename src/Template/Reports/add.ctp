<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>
<br><br><br>
<div class="reports form large-10 medium-9 columns">
    <?= $this->Form->create($report); ?>
    <fieldset>
        <legend><?= __('Add Report') ?></legend>
        <?php
            echo $this->Form->input('date_created',['type'=>'hidden']);
            echo $this->Form->input('reportLocation');
            echo $this->Form->input('users_id');
            echo $this->Form->input('reportType_id', ['options' => $reporttypes]);
        ?>
    </fieldset>
   <?= $this->Html->link('CANCEL',['controller' => 'Reports', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>
</body>
</html>