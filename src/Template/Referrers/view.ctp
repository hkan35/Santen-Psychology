<html>
<head>

<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>
<br><br><br>
<div class="referrers view large-10 medium-9 columns">
    <h2><?= h($referrer->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($referrer->type) ?></p>
            <h6 class="subheader"><?= __('DoctorName') ?></h6>
            <p><?= h($referrer->doctorName) ?></p>
            <h6 class="subheader"><?= __('DoctorProviderNo') ?></h6>
            <p><?= h($referrer->doctorProviderNo) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $referrer->has('user') ? $this->Html->link($referrer->user->username, ['controller' => 'Users', 'action' => 'view', $referrer->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($referrer->id) ?></p>
            <h6 class="subheader"><?= __('Clinic Id') ?></h6>
            <p><?= $this->Number->format($referrer->clinic_id) ?></p>
			<h6 class="subheader"><?= __('Clinic Name') ?></h6>
			<p><?= $referrer->has('clinic') ? $this->Html->link($referrer->clinic->clinic_name, ['controller' => 'Clinics', 'action' => 'view', $referrer->clinic->id]) : '' ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <?= $this->Text->autoParagraph(h($referrer->notes)); ?>
		<?= $this->Html->link('Back to index',['controller' => 'referrers', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
        </div>
    </div>
</div>

</body>
</html>



