<div class="addressCoordinates form">
<?php echo $this->Form->create('AddressCoordinate'); ?>
	<fieldset>
		<legend><?php echo __('Add Address Coordinate'); ?></legend>
	<?php
		echo $this->Form->input('address_id');
		echo $this->Form->input('coordinate_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Address Coordinates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coordinates'), array('controller' => 'coordinates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate'), array('controller' => 'coordinates', 'action' => 'add')); ?> </li>
	</ul>
</div>
