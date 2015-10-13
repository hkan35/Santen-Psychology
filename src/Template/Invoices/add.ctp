<html>
<head>
    <?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('base.css') ?>



</head>
<body>
<div class="invoices form large-10 medium-9 columns">
    <?= $this->Form->create($invoice); ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->input('date',['type'=>'hidden']);
            echo $this->Form->input('dueDate');
            echo $this->Form->input('amount');
            echo $this->Form->input('medicareRebate');
        ?>
    </fieldset>
    <?= $this->Html->link('CANCEL',['controller' => 'Appointmenttypes', 'action' => 'index', '_full' => true],['class'=>'btn btn-warning']);?>
    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
    
    <?= $this->Form->end() ?>

</body>
</html>