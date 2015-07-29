<div class="actions columns large-2 medium-3">
	
		    <h3><?= __('Main') ?></h3>
	    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
	
	<li>_________________</li>
	<h3><?= __('Sub') ?></h3>  
	<li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?></li>
	<li><?= $this->Html->link(__('Manage Report types'), ['controller' => 'Reporttypes', 'action' => 'index']) ?> </li>
   
    </ul>
	
	
	
	
</div>
<div class="reports index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date_created') ?></th>
            <th><?= $this->Paginator->sort('reportLocation') ?></th>
            <th><?= $this->Paginator->sort('users_id') ?></th>
            <th><?= $this->Paginator->sort('reportType_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
	<h3>Reports</h3>
    <?php foreach ($reports as $report): ?>
        <tr>
            <td><?= $this->Number->format($report->id) ?></td>
            <td><?= h($report->date_created) ?></td>
            <td><?= h($report->reportLocation) ?></td>
            <!--<td><?= $this->Number->format($report->users_id) ?></td>-->
			 <td><?= $report->has('user') ? $this->Html->link($report->user->username, ['controller' => 'Users', 'action' => 'view', $report->user->id]) : '' ?></td> 
            <td>
                <?= $report->has('reporttype') ? $this->Html->link($report->reporttype->reportTypeName, ['controller' => 'Reporttypes', 'action' => 'view', $report->reporttype->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $report->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
