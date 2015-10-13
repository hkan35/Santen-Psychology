<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>

<div class="referrers form large-10 medium-9 columns">
    <?= $this->Form->create($referrer); ?>
    <fieldset>
        <legend><?= __('Add Referrer') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('doctorName');
            echo $this->Form->input('doctorProviderNo',['placeholder'=>'e.g 4024742F']);
            echo $this->Form->input('notes');
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('clinic_id');
        ?>
    </fieldset>
    
    
	<span></span>
	<?= $this->Html->link('CANCEL',['controller' => 'referrers', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>


</body>
</html>
