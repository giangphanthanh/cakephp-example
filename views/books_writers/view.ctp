<div class="booksWriters view">
<h2><?php  __('Books Writer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Book'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($booksWriter['Book']['title'], array('controller' => 'books', 'action' => 'view', $booksWriter['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Writer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($booksWriter['Writer']['name'], array('controller' => 'writers', 'action' => 'view', $booksWriter['Writer']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Books Writer', true), array('action' => 'edit', $booksWriter['BooksWriter']['book_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Books Writer', true), array('action' => 'delete', $booksWriter['BooksWriter']['book_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $booksWriter['BooksWriter']['book_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books Writers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Books Writer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books', true), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book', true), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Writers', true), array('controller' => 'writers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Writer', true), array('controller' => 'writers', 'action' => 'add')); ?> </li>
	</ul>
</div>
