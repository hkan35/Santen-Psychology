<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="reports view large-10 medium-9 columns">
    <h2><?= h($report->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('ReportLocation') ?></h6>
            <p><?= h($report->reportLocation) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($report->id) ?></p>
            <h6 class="subheader"><?= __('Client') ?></h6>
            <p><?= $this->Number->format($report->client) ?></p>
            <h6 class="subheader"><?= __('ReportType') ?></h6>
            <p><?= $this->Number->format($report->reportType) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($report->date_created) ?></p>
        </div>
    </div>
</div>
