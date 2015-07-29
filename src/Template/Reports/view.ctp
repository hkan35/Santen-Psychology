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
		<li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?> </li>
     
    </ul>
	
	
	
</div>
<div class="reports view large-10 medium-9 columns">
    <h2><?= h($report->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('ReportLocation') ?></h6>
            <p><?= h($report->reportLocation) ?></p>
            <h6 class="subheader"><?= __('Reporttype') ?></h6>
            <p><?= $report->has('reporttype') ? $this->Html->link($report->reporttype->reportTypeName, ['controller' => 'Reporttypes', 'action' => 'view', $report->reporttype->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($report->id) ?></p>
			<h6 class="subheader"><?= __('User id') ?></h6>
			<p><?= $this->Number->format($report->users_id) ?></p>
            <h6 class="subheader"><?= __('Username') ?></h6>
			<p><?= $report->has('user') ? $this->Html->link($report->user->username, ['controller' => 'Users', 'action' => 'view', $report->user->id]) : '' ?></td> </p>
            
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($report->date_created) ?></p>
        </div>
    </div>
</div>
