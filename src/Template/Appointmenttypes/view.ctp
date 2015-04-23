<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Appointmenttype'), ['action' => 'edit', $appointmenttype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appointmenttype'), ['action' => 'delete', $appointmenttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointmenttype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appointmenttypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointmenttype'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="appointmenttypes view large-10 medium-9 columns">
    <h2><?= h($appointmenttype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($appointmenttype->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($appointmenttype->id) ?></p>
        </div>
    </div>
</div>
