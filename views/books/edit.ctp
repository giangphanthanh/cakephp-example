<div class="books form">
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('info');
		echo $this->Form->input('price');
		echo $this->Form->input('image');
		echo $this->Form->input('category_id');
		echo $this->Form->input('slug');
		echo $this->Form->input('pages');
		echo $this->Form->input('link_download');
		echo $this->Form->input('Writer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Book.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Book.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Books', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Writers', true), array('controller' => 'writers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Writer', true), array('controller' => 'writers', 'action' => 'add')); ?> </li>
	</ul>
</div>