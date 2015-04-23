<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Referrer'), ['action' => 'edit', $referrer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Referrer'), ['action' => 'delete', $referrer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referrer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Referrers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referrer'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="referrers view large-10 medium-9 columns">
    <h2><?= h($referrer->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($referrer->type) ?></p>
            <h6 class="subheader"><?= __('DoctorName') ?></h6>
            <p><?= h($referrer->doctorName) ?></p>
            <h6 class="subheader"><?= __('DoctorProviderNo') ?></h6>
            <p><?= h($referrer->doctorProviderNo) ?></p>
            <h6 class="subheader"><?= __('Clinic') ?></h6>
            <p><?= h($referrer->clinic) ?></p>
            <h6 class="subheader"><?= __('ClinicPhone') ?></h6>
            <p><?= h($referrer->clinicPhone) ?></p>
            <h6 class="subheader"><?= __('ClinicEmail') ?></h6>
            <p><?= h($referrer->clinicEmail) ?></p>
            <h6 class="subheader"><?= __('ClinicAddress') ?></h6>
            <p><?= h($referrer->clinicAddress) ?></p>
            <h6 class="subheader"><?= __('ClinicPostalAddress') ?></h6>
            <p><?= h($referrer->clinicPostalAddress) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($referrer->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($referrer->date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <?= $this->Text->autoParagraph(h($referrer->notes)); ?>

        </div>
    </div>
</div>
