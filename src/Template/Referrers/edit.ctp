<html>
<head>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	

</head>
<body>



<div class="referrers form large-10 medium-9 columns">
    <?= $this->Form->create($referrer); ?>
    <fieldset>
        <legend><?= __('Edit Referrer') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('doctorName');
            echo $this->Form->input('doctorProviderNo');
            echo $this->Form->input('notes');
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('clinic_id',['options' => $clinics]);
        ?>
    </fieldset>

    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>


	<?= $this->Html->link('CANCEL',['controller' => 'referrers', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->end() ?>
<!--<div style="text-align:right;">-->
	</div>
</div>
	





</body>
</html>
