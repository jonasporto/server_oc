<div class="coordinates form">
<?php echo $this->Form->create('Coordinate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Coordinate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Coordinate.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Coordinate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coordinates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Coordinate Users'), array('controller' => 'coordinate_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate User'), array('controller' => 'coordinate_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
