<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Clinic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referrers'), ['controller' => 'Referrers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referrer'), ['controller' => 'Referrers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clinics index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('clinic_name') ?></th>
            <th><?= $this->Paginator->sort('clinic_phone') ?></th>
            <th><?= $this->Paginator->sort('clinic_email') ?></th>
            <th><?= $this->Paginator->sort('clinic_address') ?></th>
            <th><?= $this->Paginator->sort('clinic_postal_address') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clinics as $clinic): ?>
        <tr>
            <td><?= $this->Number->format($clinic->id) ?></td>
            <td><?= h($clinic->clinic_name) ?></td>
            <td><?= h($clinic->clinic_phone) ?></td>
            <td><?= h($clinic->clinic_email) ?></td>
            <td><?= h($clinic->clinic_address) ?></td>
            <td><?= h($clinic->clinic_postal_address) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $clinic->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clinic->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clinic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clinic->id)]) ?>
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
