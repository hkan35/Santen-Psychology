<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $referrer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $referrer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Referrers'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="referrers form large-10 medium-9 columns">
    <?= $this->Form->create($referrer); ?>
    <fieldset>
        <legend><?= __('Edit Referrer') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('type');
            echo $this->Form->input('doctorName');
            echo $this->Form->input('doctorProviderNo');
            echo $this->Form->input('clinic');
            echo $this->Form->input('clinicPhone');
            echo $this->Form->input('clinicEmail');
            echo $this->Form->input('clinicAddress');
            echo $this->Form->input('clinicPostalAddress');
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
