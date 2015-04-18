<div class="coupons form">
<?php echo $this->Form->create('Coupon');?>
	<fieldset>
		<legend><?php __('Add Coupon'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('percent');
		echo $this->Form->input('depscription');
		echo $this->Form->input('time_start');
		echo $this->Form->input('time_end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coupons', true), array('action' => 'index'));?></li>
	</ul>
</div>