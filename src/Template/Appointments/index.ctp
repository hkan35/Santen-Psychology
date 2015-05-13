  <div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?></li>
				<li>	<?=  $this->Html->link('--Appointment Types--',['controller' => 'Appointmenttypes', 'action' => 'index', '_full' => true],['class' => 'button']);?></li>

    </ul>
</div>
<div class="appointments index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('datetime') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('client_id') ?></th>
            <th><?= $this->Paginator->sort('appointmenttype_id') ?></th>
            <th><?= $this->Paginator->sort('invoice_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($appointments as $appointment): ?>
        <tr>
            <td><?= $this->Number->format($appointment->id) ?></td>
            <td><?= h($appointment->datetime) ?></td>
            <td><?= $this->Number->format($appointment->price) ?></td>
            <td>                <?= $appointment->has('client') ? $this->Html->link($appointment->client->full_name, ['controller' => 'Clients', 'action' => 'view', $appointment->client->id]) : '' ?></td>
            <td>                <?= $appointment->has('appointmenttype') ? $this->Html->link($appointment->appointmenttype->description, ['controller' => 'Appointmenttypes', 'action' => 'view', $appointment->appointmenttype->id]) : '' ?></td>
    
 
                       
            
            <td><?= $this->Number->format($appointment->invoice_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
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
