<div class="writers view">
<h2><?php  __('Writer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $writer['Writer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $writer['Writer']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slug'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $writer['Writer']['slug']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Biography'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $writer['Writer']['biography']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $writer['Writer']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Writer', true), array('action' => 'edit', $writer['Writer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Writer', true), array('action' => 'delete', $writer['Writer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $writer['Writer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Writers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Writer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books', true), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book', true), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Books');?></h3>
	<?php if (!empty($writer['Book'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Info'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Category Id'); ?></th>
		<th><?php __('Slug'); ?></th>
		<th><?php __('Pages'); ?></th>
		<th><?php __('Link Download'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($writer['Book'] as $book):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $book['id'];?></td>
			<td><?php echo $book['title'];?></td>
			<td><?php echo $book['info'];?></td>
			<td><?php echo $book['price'];?></td>
			<td><?php echo $book['image'];?></td>
			<td><?php echo $book['category_id'];?></td>
			<td><?php echo $book['slug'];?></td>
			<td><?php echo $book['pages'];?></td>
			<td><?php echo $book['link_download'];?></td>
			<td><?php echo $book['created'];?></td>
			<td><?php echo $book['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'books', 'action' => 'delete', $book['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book', true), array('controller' => 'books', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
