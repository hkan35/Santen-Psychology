<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="appointments view large-10 medium-9 columns">
    <h2><?= h($appointment->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($appointment->id) ?></p>
            <h6 class="subheader"><?= __('Price $AUD') ?></h6>
            <p><?= $this->Number->format($appointment->price) ?></p>
            <h6 class="subheader"><?= __('Client') ?></h6>
            <p><?= $appointment->has('client') ? $this->Html->link($appointment->client->full_name, ['controller' => 'Clients', 'action' => 'view', $appointment->client->id]) : '' ?></p>
 
 <h6 class="subheader"><?= __('Appointment Type') ?></h6>
            <p><?=  $appointment->has('appointmenttype') ? $this->Html->link($appointment->appointmenttype->description, ['controller' => 'Appointmenttypes', 'action' => 'view', $appointment->appointmenttype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Invoice Id') ?></h6>
            <p><?= $this->Number->format($appointment->invoice_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date and Time') ?></h6>
            <p><?= h($appointment->datetime) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Note') ?></h6>
            <?= $this->Text->autoParagraph(h($appointment->note)); ?>

        </div>
    </div>
</div>
