<div class="actions columns large-2 medium-3">
    <h3><?= __('Main') ?></h3>
	    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>	
	<li>_________________</li>
	<h3><?= __('Sub') ?></h3>
		<!--<li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?></li>-->
        <!--<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>-->
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <!--<li><?= $this->Html->link(__('Manage Appointment Types'), ['controller' => 'Appointmenttypes', 'action' => 'index']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('New Appointmenttype'), ['controller' => 'Appointmenttypes', 'action' => 'add']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>-->
    </ul>
	
</div>
<div class="users index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('username') ?></th>
            <!--<th><?= $this->Paginator->sort('password') ?></th>-->
            <th><?= $this->Paginator->sort('role') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('lastName') ?></th>
            <th><?= $this->Paginator->sort('firstName') ?></th>
            <th class="actions"><?= __('Modify') ?></th>
        </tr>
    </thead>
    <tbody>
	<h3>Users</h3>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->id) ?></td>
            <td><?= h($user->username) ?></td>
            <!--<td><?= h($user->password) ?></td>-->
            <td><?= h($user->role) ?></td>
            <td><?= h($user->created) ?></td>
            <td><?= h($user->lastName) ?></td>
            <td><?= h($user->firstName) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
               <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
               <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
