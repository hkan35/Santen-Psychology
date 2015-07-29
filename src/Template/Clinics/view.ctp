<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Clinic'), ['action' => 'edit', $clinic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clinic'), ['action' => 'delete', $clinic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clinic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clinics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clinic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Referrers'), ['controller' => 'Referrers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referrer'), ['controller' => 'Referrers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clinics view large-10 medium-9 columns">
    <h2><?= h($clinic->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Clinic Name') ?></h6>
            <p><?= h($clinic->clinic_name) ?></p>
            <h6 class="subheader"><?= __('Clinic Phone') ?></h6>
            <p><?= h($clinic->clinic_phone) ?></p>
            <h6 class="subheader"><?= __('Clinic Email') ?></h6>
            <p><?= h($clinic->clinic_email) ?></p>
            <h6 class="subheader"><?= __('Clinic Address') ?></h6>
            <p><?= h($clinic->clinic_address) ?></p>
            <h6 class="subheader"><?= __('Clinic Postal Address') ?></h6>
            <p><?= h($clinic->clinic_postal_address) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clinic->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Referrers') ?></h4>
    <?php if (!empty($clinic->referrers)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Type') ?></th>
            <th><?= __('DoctorName') ?></th>
            <th><?= __('DoctorProviderNo') ?></th>
            <th><?= __('Notes') ?></th>
            <th><?= __('Users Id') ?></th>
            <th><?= __('Clinic Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clinic->referrers as $referrers): ?>
        <tr>
            <td><?= h($referrers->id) ?></td>
            <td><?= h($referrers->type) ?></td>
            <td><?= h($referrers->doctorName) ?></td>
            <td><?= h($referrers->doctorProviderNo) ?></td>
            <td><?= h($referrers->notes) ?></td>
            <td><?= h($referrers->users_id) ?></td>
            <td><?= h($referrers->clinic_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Referrers', 'action' => 'view', $referrers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Referrers', 'action' => 'edit', $referrers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Referrers', 'action' => 'delete', $referrers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referrers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
