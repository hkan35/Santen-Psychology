<h2 class="hightitle"><?php __('Forget Password'); ?></h2>
<div class="forgetpwd form" style="margin:5px auto 5px auto;width:450px;">
<?php //echo $this->Form->create('User', array('action' => 'reset')); ?>
 
<?php
if(isset($errors)){
echo '<div class="error">';
echo "<ul>";
foreach($errors as $error){
 echo"<li><div class='error-message'>$error</div></li>";
}
echo"</ul>";
echo'</div>';
}
?>
 
<form method="post">

<!--
<?php
echo $this->Form->input('password',array("type"=>"password"));
echo $this->Form->input('password_confirm',array("type"=>"password"));
?>
<input type="submit" class="button" style="float:left;margin-left:3px;" value="Save" />
 
<?php //echo $this->Form->end();?>
<?= $this->Form->end() ?>
</form> 


<!---
<div class="reset-form">
    <h2>Reset password</h2>
    <div class="form-info">


        <?= $this->Form->create($user,['novalidate' => true]) ?>

        <fieldset>
            <?= $this->Form->input('password',["type" =>"password",'class'=>'resetpassword']) ?>
            <?= $this->Form->input('password_confirm',["type" =>"password",'class'=>'resetpassword']) ?>
        </fieldset>

        <div class="txt-center">
            <?= $this->Form->button(__('Submit'),['class'=>'submit']); ?>
        </div>

        <?= $this->Form->end() ?>

    </div>
</div>


