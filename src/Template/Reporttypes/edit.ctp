<div class="actions columns large-2 medium-3">
  
	
			  <h3><?= __('Main') ?></h3>
	    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>	
	<li>_________________</li>
	<h3><?= __('Sub') ?></h3>  
	

        <li><?= $this->Form->postLink(__('Delete Reporttype'), ['action' => 'delete', $reporttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reporttype->id)]) ?> </li>
        
        
	
	
</div>
<div class="reporttypes form large-10 medium-9 columns">
    <?= $this->Form->create($reporttype); ?>
    <fieldset>
        <legend><?= __('Edit Reporttype') ?></legend>
        <?php
            echo $this->Form->input('reportTypeName');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<h3><?= $this->Html->link('Cancel',['controller' => 'Reporttypes', 'action' => 'index', '_full' => true]);?></h3>
</div>
