<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $report->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="reports form large-10 medium-9 columns">
    <?= $this->Form->create($report); ?>
    <fieldset>
        <legend><?= __('Edit Report') ?></legend>
        <?php
            echo $this->Form->input('date_created');
            echo $this->Form->input('reportLocation');
            echo $this->Form->input('client');
            echo $this->Form->input('reportType');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
