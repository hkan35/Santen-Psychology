<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="clients form large-10 medium-9 columns">
    <?= $this->Form->create($client); ?>
    <fieldset>
        <legend><?= __('Edit Client') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('lastName');
            echo $this->Form->input('firstName');
            echo $this->Form->input('phone');
            echo $this->Form->input('mobile');
            echo $this->Form->input('email');
            echo $this->Form->input('address');
            echo $this->Form->input('city');
            echo $this->Form->input('postalAddress');
            echo $this->Form->input('postalCity');
            echo $this->Form->input('privateHealthCare');
            echo $this->Form->input('healthCareProvider');
            echo $this->Form->input('intakeFormLocation');
            echo $this->Form->input('referrer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
