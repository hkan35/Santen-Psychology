<html>
<head>

<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
</head>
<body>

<br><br><br>
<div class="reports view large-10 medium-9 columns">
    <h2><?= h($report->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('ReportLocation') ?></h6>
            <p><?= h($report->reportLocation) ?></p>
            <h6 class="subheader"><?= __('Reporttype') ?></h6>
            <p><?= $report->has('reporttype') ? $this->Html->link($report->reporttype->reportTypeName, ['controller' => 'Reporttypes', 'action' => 'view', $report->reporttype->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($report->id) ?></p>
			<h6 class="subheader"><?= __('User id') ?></h6>
			<p><?= $this->Number->format($report->users_id) ?></p>
            <h6 class="subheader"><?= __('Username') ?></h6>
			<p><?= $report->has('user') ? $this->Html->link($report->user->username, ['controller' => 'Users', 'action' => 'view', $report->user->id]) : '' ?></td> </p>
            
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($report->date_created) ?></p>
            
        </div>
        
    </div>
    <?= $this->Html->link('Back to index',['controller' => 'Reports', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
</div>

</body>
</html>