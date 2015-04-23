<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Notes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="notes form large-10 medium-9 columns">
    <?= $this->Form->create($note); ?>
    <fieldset>
        <legend><?= __('Add Note') ?></legend>
        <?php
            echo $this->Form->input('date_created');
            echo $this->Form->input('note');
            echo $this->Form->input('client');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
