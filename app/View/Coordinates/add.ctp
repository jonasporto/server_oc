<div class="coordinates form">
<?php echo $this->Form->create('Coordinate'); ?>
	<fieldset>
		<legend><?php echo __('Add Coordinate'); ?></legend>
	<?php
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coordinates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Coordinate Users'), array('controller' => 'coordinate_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate User'), array('controller' => 'coordinate_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
