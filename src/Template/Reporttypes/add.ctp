<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Reporttypes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="reporttypes form large-10 medium-9 columns">
    <?= $this->Form->create($reporttype); ?>
    <fieldset>
        <legend><?= __('Add Reporttype') ?></legend>
        <?php
            echo $this->Form->input('reportTypeName');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
