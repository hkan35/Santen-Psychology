<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($appointment); ?>
    <fieldset>
        <legend><?= __('Add Appointment') ?></legend>
        <?php
            echo $this->Form->input('datetime');
            echo $this->Form->input('note');
            echo $this->Form->input('price');
            echo $this->Form->input('client_id');
            echo $this->Form->input('appointmenttype_id');
            //echo $this->Form->input('invoice_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
