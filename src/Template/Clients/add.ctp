<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="clients form large-10 medium-9 columns">
    <?= $this->Form->create($client); ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
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
            //echo $this->Form->select('privateHealthCare',['Y','N'],['empty' => 'Select Option']); 
			echo "Private Health Insurance<br> "; echo $this->Form->checkbox('privateHealthCare',['value' => 'Y', 'hiddenField','N']); 
            echo $this->Form->input('healthCareProvider');
            echo $this->Form->input('intakeFormLocation');
            echo $this->Form->input('referrer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
