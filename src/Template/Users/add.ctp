<html>
<head>
	<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>

<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('role',['options' => ['admin' => 'Admin', 'client' => 'Client']
        ]);
            echo $this->Form->input('lastName');
            echo $this->Form->input('firstName');
            echo $this->Form->input('phone');
            echo $this->Form->input('mobile');
            echo $this->Form->input('email');
            echo $this->Form->input('address');
            echo $this->Form->input('city');
            echo $this->Form->input('postalAddress');
            echo $this->Form->input('postalCity');
            echo "Private Health Insurance<br> "; echo $this->Form->checkbox('privateHealthCare',['value' => 'Y', 'hiddenField','N']); 
            echo $this->Form->input('healthCareProvider');
            echo $this->Form->input('intakeFormLocation');
            echo $this->Form->input('referrer');
        ?>
    </fieldset>
  <?= $this->Html->link('CANCEL',['controller' => 'Users', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
	<?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
	
    <?= $this->Form->end() ?>
	
</div>
</body>
</html>