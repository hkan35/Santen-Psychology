



<html>
<head>

<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>
<div class="appointments view large-10 medium-9 columns">
    <h2><?= h($appointment->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Confirm Status') ?></h6>
            <p><?= h($appointment->confirm_status) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $appointment->has('user') ? $this->Html->link($appointment->user->username, ['controller' => 'Users', 'action' => 'view', $appointment->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Appointmenttype') ?></h6>
            <p><?= $appointment->has('appointmenttype') ? $this->Html->link($appointment->appointmenttype->description, ['controller' => 'Appointmenttypes', 'action' => 'view', $appointment->appointmenttype->id]) : '' ?></p>
            
			<h6 class="subheader"><?= __('Full Price') ?></h6>
            <p><?= $appointment->has('appointmenttype') ? $this->Html->link($appointment->appointmenttype->full_cost, ['controller' => 'Appointmenttypes', 'action' => 'view', $appointment->appointmenttype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Rebate amount') ?></h6>
            <p><?= $appointment->has('appointmenttype') ? $this->Html->link($appointment->appointmenttype->rebate_amount, ['controller' => 'Appointmenttypes', 'action' => 'view', $appointment->appointmenttype->id]) : '' ?></p>
            
			<!--<h6 class="subheader"><?= __('Final Cost') ?></h6>-->
           
           
			<h6 class="subheader"><?= __('Invoice') ?></h6>
            <p><?= $appointment->has('invoice') ? $this->Html->link($appointment->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $appointment->invoice->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($appointment->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date and time') ?></h6>
            <p><?= h($appointment->datetime) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Note') ?></h6>
            <?= $this->Text->autoParagraph(h($appointment->note)); ?>
<?= $this->Html->link('Back to index',['controller' => 'Appointments', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
        </div>
    </div>
</div>

</body>
</html>