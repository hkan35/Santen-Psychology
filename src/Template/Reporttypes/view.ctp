<div class="actions columns large-2 medium-3">

		  <h3><?= __('Main') ?></h3>
	    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>	
	<li>_________________</li>
	<h3><?= __('Sub') ?></h3>  
	<li><?= $this->Html->link(__('List Reporttypes'), ['action' => 'index']) ?> </li>
		 <li><?= $this->Html->link(__('Edit Reporttype'), ['action' => 'edit', $reporttype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reporttype'), ['action' => 'delete', $reporttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reporttype->id)]) ?> </li>
        
        
    </ul>
	
	
</div>
<div class="reporttypes view large-10 medium-9 columns">
    <h2><?= h($reporttype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('ReportTypeName') ?></h6>
            <p><?= h($reporttype->reportTypeName) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($reporttype->id) ?></p>
        </div>
    </div>
</div>
