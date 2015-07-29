<div class="actions columns large-2 medium-3">
    
	<h3><?= __('Main') ?></h3>
    <ul class="side-nav">
	<li><?=  $this->Html->link('Appointments',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></li>
	<li><?=  $this->Html->link('Users',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
	<li><?= $this->Html->link(__('Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>	
	<li>_________________</li>
    <h3><?= __('Sub') ?></h3>
	 <li><?= $this->Html->link(__('List Appointmenttype'), ['action' => 'index']) ?> </li>
       <li><?= $this->Html->link(__('Edit Appointmenttype'), ['action' => 'edit', $appointmenttype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appointmenttype'), ['action' => 'delete', $appointmenttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointmenttype->id)]) ?> </li>
    </ul>
	

</div>
<div class="appointmenttypes view large-10 medium-9 columns">
    <h2><?= h($appointmenttype->description) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($appointmenttype->description) ?></p>
            <h6 class="subheader"><?= __('Medicare Rebatable') ?></h6>
            <p><?= h($appointmenttype->medicare_rebatable) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($appointmenttype->id) ?></p>
            <h6 class="subheader"><?= __('Full Cost') ?></h6>
            <p><?= $this->Number->format($appointmenttype->full_cost) ?></p>
            <h6 class="subheader"><?= __('Rebate Amount') ?></h6>
            <p><?= $this->Number->format($appointmenttype->rebate_amount) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Appointments') ?></h4>
    <?php if (!empty($appointmenttype->appointments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Datetime') ?></th>
            <th><?= __('Note') ?></th>
            <th><?= __('Confirm Status') ?></th>
            <th><?= __('Users Id') ?></th>
            <th><?= __('Appointmenttype Id') ?></th>
            <th><?= __('Invoice Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($appointmenttype->appointments as $appointments): ?>
        <tr>
            <td><?= h($appointments->id) ?></td>
            <td><?= h($appointments->datetime) ?></td>
            <td><?= h($appointments->note) ?></td>
            <td><?= h($appointments->confirm_status) ?></td>
            <td><?= h($appointments->users_id) ?></td>
            <td><?= h($appointments->appointmenttype_id) ?></td>
            <td><?= h($appointments->invoice_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
