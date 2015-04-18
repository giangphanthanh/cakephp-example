<div class="books view">
    <h2><?php  __('Book');?></h2>
      <div class="col-md-4">
        <?php echo $this->Html->image($book['Book']['image'], array('width' => '60px;', 'height' => "auto;")); ?><br>
      </div>
      <div class="col-md-8 details">
        <dl><?php $i = 0; $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['id']; ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Info'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['info']; ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['price']; ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $this->Html->link($book['Category']['name'], array('controller' => 'categories', 'action' => 'view', $book['Category']['id'])); ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slug'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['slug']; ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pages'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['pages']; ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Link Download'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['link_download']; ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['created']; ?>
          &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
          <?php echo $book['Book']['modified']; ?>
          &nbsp;
        </dd>
      </dl>
      </div>
    </div>
    <div class="actions">
    	<h3><?php __('Actions'); ?></h3>
    	<ul>
    		<li><?php echo $this->Html->link(__('Edit Book', true), array('action' => 'edit', $book['Book']['id'])); ?> </li>
    		<li><?php echo $this->Html->link(__('Delete Book', true), array('action' => 'delete', $book['Book']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $book['Book']['id'])); ?> </li>
    		<li><?php echo $this->Html->link(__('List Books', true), array('action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Book', true), array('action' => 'add')); ?> </li>
    		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
    		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
    		<li><?php echo $this->Html->link(__('List Writers', true), array('controller' => 'writers', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Writer', true), array('controller' => 'writers', 'action' => 'add')); ?> </li>
    	</ul>
    </div>
    <div class="related">
      <h3><?php __('Related Writers');?></h3>
      <?php if (!empty($book['Writer'])):?>
      <table cellpadding = "0" cellspacing = "0">
      <tr>
        <th><?php __('Id'); ?></th>
        <th><?php __('Name'); ?></th>
        <th><?php __('Slug'); ?></th>
        <th><?php __('Biography'); ?></th>
        <th><?php __('Created'); ?></th>
        <th class="actions"><?php __('Actions');?></th>
      </tr>
      <?php
        $i = 0;
        foreach ($book['Writer'] as $writer):
          $class = null;
          if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
          }
        ?>
        <tr<?php echo $class;?>>
          <td><?php echo $writer['id'];?></td>
          <td><?php echo $writer['name'];?></td>
          <td><?php echo $writer['slug'];?></td>
          <td><?php echo $writer['biography'];?></td>
          <td><?php echo $writer['created'];?></td>
          <td class="actions">
            <?php echo $this->Html->link(__('View', true), array('controller' => 'writers', 'action' => 'view', $writer['id'])); ?>
            <?php echo $this->Html->link(__('Edit', true), array('controller' => 'writers', 'action' => 'edit', $writer['id'])); ?>
            <?php echo $this->Html->link(__('Delete', true), array('controller' => 'writers', 'action' => 'delete', $writer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $writer['id'])); ?>
          </td>
        </tr>
      <?php endforeach; ?>
      </table>
    <?php endif; ?>

      <div class="actions">
        <ul>
          <li><?php echo $this->Html->link(__('New Writer', true), array('controller' => 'writers', 'action' => 'add'));?> </li>
        </ul>
      </div>
    </div>
    <br>
    <hr>
    <div class="container near-book">
      <!-- sach lien quan -->
      <h3>All the book in a group</h3>
      <?php echo $this->element('books', array('books' => $related_books)); ?>
    </div>
    <div class="container">
      <!-- Comment -->
      <div class="related">
      	<h3><?php __('Comments');?></h3>
      	<?php if (!empty($comments)):?>
      	  <?php foreach ($comments as $comment): ?>
            <strong><?php echo $comment['User']['username']; ?></strong> send:
            <i>"<?php echo $comment['Comment']['content']; ?>"</i> <br>
          <?php endforeach ?>
        <?php endif; ?>
      </div>

      <div class="comments">
      <?php echo $this->Form->create('Comment', array('action' => 'add'));?>
        <fieldset>
          <legend><?php __('Add Comment'); ?></legend>
        <?php
          echo $this->Form->input('user_id', array('label'=> '','type'=>'text', 'value'=>1, 'hidden'=>true, 'class'=>'hidden'));
          echo $this->Form->input('book_id', array('label'=> '','type'=>'text', 'value'=> $book['Book']['id'], 'hidden'=>true, 'class'=>'hidden'));
          echo $this->Form->input('content');
        ?>
        </fieldset>
      <?php echo $this->Form->end(__('Submit', true));?>

    </div>

</div>
<style type="text/css">
  .input.text{
    display: none;
  }
  legend{
    margin-bottom: 0px!important;
  }
  textarea{
    height: 100px;
  }
</style>