<html>
<head>


	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>
<div class="appointments form large-10 medium-9 columns">
    <?= $this->Form->create($appointment); ?>
    <fieldset>
        <legend><?= __('Edit Appointment') ?></legend>
        <?php
            echo $this->Form->input('datetime');
            echo $this->Form->input('note');
            echo $this->Form->input('confirm_status',['options' => ['no' => 'Not yet', 'pending' => 'Pending','confirmed' => 'Confirmed' ]
        ]);
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('appointmenttype_id', ['options' => $appointmenttypes, 'empty' => true]);
            echo $this->Form->input('invoice_id', ['options' => $invoices, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	<h3><?= $this->Html->link('Cancel',['controller' => 'Appointments', 'action' => 'index', '_full' => true]);?></h3>
</div>
</div>
</body>
</html>