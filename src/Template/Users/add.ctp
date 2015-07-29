<div class="actions columns large-2 medium-3">
     <h3><?= __('Main') ?></h3>
	    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>	
    </ul>
</div>
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<h3><?= $this->Html->link('Cancel',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></h3>
</div>
