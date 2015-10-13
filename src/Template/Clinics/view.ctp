<html>
<head>

<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>
<br><br>
<div class="clinics view large-10 medium-9 columns">
    <h2><?= h($clinic->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Clinic Name') ?></h6>
            <p><?= h($clinic->clinic_name) ?></p>
            <h6 class="subheader"><?= __('Clinic Phone') ?></h6>
            <p><?= h($clinic->clinic_phone) ?></p>
            <h6 class="subheader"><?= __('Clinic Email') ?></h6>
            <p><?= h($clinic->clinic_email) ?></p>
            <h6 class="subheader"><?= __('Clinic Address') ?></h6>
            <p><?= h($clinic->clinic_address) ?></p>
            <h6 class="subheader"><?= __('Clinic Postal Address') ?></h6>
            <p><?= h($clinic->clinic_postal_address) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clinic->id) ?></p>
		</div>
	</div>	
		<div class="row texts">	
       <br>
		<?= $this->Html->link('Back to index',['controller' => 'clinics', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
		 </div>
	</div>
</div>

</body>
</html>

