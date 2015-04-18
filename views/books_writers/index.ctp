<div class="booksWriters index">
	<h2><?php __('Books Writers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('book_id');?></th>
			<th><?php echo $this->Paginator->sort('writer_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($booksWriters as $booksWriter):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($booksWriter['Book']['title'], array('controller' => 'books', 'action' => 'view', $booksWriter['Book']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($booksWriter['Writer']['name'], array('controller' => 'writers', 'action' => 'view', $booksWriter['Writer']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $booksWriter['BooksWriter']['book_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $booksWriter['BooksWriter']['book_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $booksWriter['BooksWriter']['book_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $booksWriter['BooksWriter']['book_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Books Writer', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Books', true), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book', true), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Writers', true), array('controller' => 'writers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Writer', true), array('controller' => 'writers', 'action' => 'add')); ?> </li>
	</ul>
</div>