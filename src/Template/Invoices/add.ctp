<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="invoices form large-10 medium-9 columns">
    <?= $this->Form->create($invoice); ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('dueDate');
            echo $this->Form->input('amount');
            echo $this->Form->input('medicareRebate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>