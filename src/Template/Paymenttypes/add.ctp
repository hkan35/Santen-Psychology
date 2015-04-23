<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Paymenttypes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="paymenttypes form large-10 medium-9 columns">
    <?= $this->Form->create($paymenttype); ?>
    <fieldset>
        <legend><?= __('Add Paymenttype') ?></legend>
        <?php
            echo $this->Form->input('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
