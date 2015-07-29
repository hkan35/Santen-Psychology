<div class="actions columns large-2 medium-3">
<h3><?= __('Main') ?></h3>
	    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
	
	<li>_________________</li>
	<h3><?= __('Sub') ?></h3>  
	<li><?= $this->Html->link(__('New Reporttype'), ['action' => 'add']) ?></li>
   
    </ul>
	
	
	
	
</div>
<div class="reporttypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('reportTypeName') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
	<h3>Report Types</h3>
    <?php foreach ($reporttypes as $reporttype): ?>
        <tr>
            <td><?= $this->Number->format($reporttype->id) ?></td>
            <td><?= h($reporttype->reportTypeName) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $reporttype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reporttype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reporttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reporttype->id)]) ?>
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
