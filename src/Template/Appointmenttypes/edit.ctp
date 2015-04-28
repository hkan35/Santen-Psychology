<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $appointmenttype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $appointmenttype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Appointmenttypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="appointmenttypes form large-10 medium-9 columns">
    <?= $this->Form->create($appointmenttype); ?>
    <fieldset>
        <legend><?= __('Edit Appointmenttype') ?></legend>
        <?php
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
