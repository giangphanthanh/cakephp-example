<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('type' => 'post','class' => 'form-horizontal', 'input' => array('label'=>false))) ?>
  <?php echo $this->Form->input('username',array('placeholder'=>'enter user name', 'class'=>"form-control")); ?>
  <?php echo $this->Form->input('password',array('placeholder'=>"enter password", 'class'=>"form-control")); ?>
  <?php echo $this->Form->button('Login', array('type'=>"submit", "class"=>"col-md-2 btn btn-primary")); ?>
<?php echo $this->Form->end(); ?>