<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clients view large-10 medium-9 columns">
    <h2><?= h($client->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('LastName') ?></h6>
            <p><?= h($client->lastName) ?></p>
            <h6 class="subheader"><?= __('FirstName') ?></h6>
            <p><?= h($client->firstName) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($client->phone) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($client->mobile) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($client->email) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($client->address) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($client->city) ?></p>
            <h6 class="subheader"><?= __('PostalAddress') ?></h6>
            <p><?= h($client->postalAddress) ?></p>
            <h6 class="subheader"><?= __('PostalCity') ?></h6>
            <p><?= h($client->postalCity) ?></p>
            <h6 class="subheader"><?= __('PrivateHealthCare') ?></h6>
            <p><?= h($client->privateHealthCare) ?></p>
            <h6 class="subheader"><?= __('HealthCareProvider') ?></h6>
            <p><?= h($client->healthCareProvider) ?></p>
            <h6 class="subheader"><?= __('IntakeFormLocation') ?></h6>
            <p><?= h($client->intakeFormLocation) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($client->id) ?></p>
            <h6 class="subheader"><?= __('Referrer') ?></h6>
            <p><?= $this->Number->format($client->referrer) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($client->date) ?></p>
        </div>
    </div>
</div>
