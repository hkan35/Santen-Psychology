<div class="actions columns large-2 medium-3">
	
		<h3><?= __('Main') ?></h3>
    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>	
	<li>_________________</li>
    <h3><?= __('Sub') ?></h3>
     <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $appointmenttype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $appointmenttype->id)]
            )
        ?></li>
	 </ul>
	
	
	
</div>
<div class="appointmenttypes form large-10 medium-9 columns">
    <?= $this->Form->create($appointmenttype); ?>
    <fieldset>
        <legend><?= __('Edit Appointmenttype') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('full_cost');
          
			echo "Medicare Rebatable<br> "; echo $this->Form->checkbox('medicare_rebatable',['value' => 'Y', 'hiddenField' =>'N']);
            echo $this->Form->input('rebate_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<h3><?= $this->Html->link('Cancel',['controller' => 'Appointmenttypes', 'action' => 'index', '_full' => true]);?></h3>
</div>
