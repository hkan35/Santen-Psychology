<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reporttype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reporttype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reporttypes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="reporttypes form large-10 medium-9 columns">
    <?= $this->Form->create($reporttype); ?>
    <fieldset>
        <legend><?= __('Edit Reporttype') ?></legend>
        <?php
            echo $this->Form->input('reportTypeName');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
