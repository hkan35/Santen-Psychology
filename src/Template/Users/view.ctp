<html>
<head>

<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->username) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($user->role) ?></p>
            <h6 class="subheader"><?= __('LastName') ?></h6>
            <p><?= h($user->lastName) ?></p>
            <h6 class="subheader"><?= __('FirstName') ?></h6>
            <p><?= h($user->firstName) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($user->phone) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($user->mobile) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($user->address) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($user->city) ?></p>
            <h6 class="subheader"><?= __('PostalAddress') ?></h6>
            <p><?= h($user->postalAddress) ?></p>
            <h6 class="subheader"><?= __('PostalCity') ?></h6>
            <p><?= h($user->postalCity) ?></p>
            <h6 class="subheader"><?= __('PrivateHealthCare') ?></h6>
            <p><?= h($user->privateHealthCare) ?></p>
            <h6 class="subheader"><?= __('HealthCareProvider') ?></h6>
            <p><?= h($user->healthCareProvider) ?></p>
            <h6 class="subheader"><?= __('IntakeFormLocation') ?></h6>
            <p><?= h($user->intakeFormLocation) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Referrer') ?></h6>
            <p><?= $this->Number->format($user->referrer) ?></p>
			</div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
        </div>
    </div>
    <br><?= $this->Html->link('Back to index',['controller' => 'Users', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?><br><br>
</div>
</body>
</html>
