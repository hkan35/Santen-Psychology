<div class="actions columns large-2 medium-3">
 	
	<h3><?= __('Main') ?></h3>
    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>	
	
	
</div>
<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($appointment); ?>
    <fieldset>
        <legend><?= __('Add Appointment') ?></legend>
        <?php
            echo $this->Form->input('datetime');
            echo $this->Form->input('note');
            /*echo $this->Form->input('confirm_status');*/
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('appointmenttype_id', ['options' => $appointmenttypes, 'empty' => true]);
			
			/*echo $this->Html->Link('Full Cost', [$appointmenttypes->id]);*/
		
            /*echo $this->Form->input('invoice_id', ['options' => $invoices, 'empty' => true]);*/
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<h3><?= $this->Html->link('Cancel',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></h3>
</div>
