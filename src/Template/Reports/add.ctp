<div class="actions columns large-2 medium-3">

	
		    <h3><?= __('Main') ?></h3>
	    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
	
	<li>_________________</li>
	<h3><?= __('Sub') ?></h3>  
		<li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?></li>
    </ul>
	
	
</div>
<div class="reports form large-10 medium-9 columns">
    <?= $this->Form->create($report); ?>
    <fieldset>
        <legend><?= __('Add Report') ?></legend>
        <?php
            echo $this->Form->input('date_created');
            echo $this->Form->input('reportLocation');
            echo $this->Form->input('users_id');
            echo $this->Form->input('reportType_id', ['options' => $reporttypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<h3><?= $this->Html->link('Cancel',['controller' => 'Reports', 'action' => 'index', '_full' => true]);?></h3>
</div>
