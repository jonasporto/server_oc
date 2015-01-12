<div class="coordinateUsers form">
<?php echo $this->Form->create('CoordinateUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Coordinate User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('coordinate_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CoordinateUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CoordinateUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coordinate Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coordinates'), array('controller' => 'coordinates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate'), array('controller' => 'coordinates', 'action' => 'add')); ?> </li>
	</ul>
</div>
