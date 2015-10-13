<html>
<head>

<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>

<br><br><br>
<div class="paymenttypes view large-10 medium-9 columns">
    <h2><?= h($paymenttype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($paymenttype->Name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($paymenttype->id) ?></p>
        </div>
    </div>
    <br><br> <?= $this->Html->link('Back to index',['controller' => 'Paymenttypes', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
</div>
</body>
</html>