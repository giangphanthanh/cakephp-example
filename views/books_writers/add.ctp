<div class="booksWriters form">
<?php echo $this->Form->create('BooksWriter');?>
	<fieldset>
		<legend><?php __('Add Books Writer'); ?></legend>
	<?php
		echo $this->Form->input('writer_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books Writers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Books', true), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book', true), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Writers', true), array('controller' => 'writers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Writer', true), array('controller' => 'writers', 'action' => 'add')); ?> </li>
	</ul>
</div>