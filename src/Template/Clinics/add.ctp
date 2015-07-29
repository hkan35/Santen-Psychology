<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Clinics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Referrers'), ['controller' => 'Referrers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referrer'), ['controller' => 'Referrers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clinics form large-10 medium-9 columns">
    <?= $this->Form->create($clinic); ?>
    <fieldset>
        <legend><?= __('Add Clinic') ?></legend>
        <?php
            echo $this->Form->input('clinic_name');
            echo $this->Form->input('clinic_phone');
            echo $this->Form->input('clinic_email');
            echo $this->Form->input('clinic_address');
            echo $this->Form->input('clinic_postal_address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
