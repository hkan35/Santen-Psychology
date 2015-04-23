<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="reports index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date_created') ?></th>
            <th><?= $this->Paginator->sort('reportLocation') ?></th>
            <th><?= $this->Paginator->sort('client') ?></th>
            <th><?= $this->Paginator->sort('reportType') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($reports as $report): ?>
        <tr>
            <td><?= $this->Number->format($report->id) ?></td>
            <td><?= h($report->date_created) ?></td>
            <td><?= h($report->reportLocation) ?></td>
            <td><?= $this->Number->format($report->client) ?></td>
            <td><?= $this->Number->format($report->reportType) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $report->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
