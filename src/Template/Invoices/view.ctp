<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['controller' => 'Appointments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['controller' => 'Appointments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="invoices view large-10 medium-9 columns">
    <h2><?= h($invoice->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($invoice->id) ?></p>
            <h6 class="subheader"><?= __('Amount') ?></h6>
            <p><?= $this->Number->format($invoice->amount) ?></p>
            <h6 class="subheader"><?= __('MedicareRebate') ?></h6>
            <p><?= $this->Number->format($invoice->medicareRebate) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($invoice->date) ?></p>
            <h6 class="subheader"><?= __('DueDate') ?></h6>
            <p><?= h($invoice->dueDate) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Appointments') ?></h4>
    <?php if (!empty($invoice->appointments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Datetime') ?></th>
            <th><?= __('Note') ?></th>
            <th><?= __('Users Id') ?></th>
            <th><?= __('Appointmenttype Id') ?></th>
            <th><?= __('Invoice Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($invoice->appointments as $appointments): ?>
        <tr>
            <td><?= h($appointments->id) ?></td>
            <td><?= h($appointments->datetime) ?></td>
            <td><?= h($appointments->note) ?></td>
            <td><?= h($appointments->users_id) ?></td>
            <td><?= h($appointments->appointmenttype_id) ?></td>
            <td><?= h($appointments->invoice_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Payments') ?></h4>
    <?php if (!empty($invoice->payments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('AmountPaid') ?></th>
            <th><?= __('Invoice Id') ?></th>
            <th><?= __('PaymentType Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($invoice->payments as $payments): ?>
        <tr>
            <td><?= h($payments->id) ?></td>
            <td><?= h($payments->date) ?></td>
            <td><?= h($payments->amountPaid) ?></td>
            <td><?= h($payments->invoice_id) ?></td>
            <td><?= h($payments->paymentType_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
