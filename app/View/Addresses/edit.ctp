<div class="addresses form">
<?php echo $this->Form->create('Address'); ?>
	<fieldset>
		<legend><?php echo __('Edit Address'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country');
		echo $this->Form->input('state');
		echo $this->Form->input('city');
		echo $this->Form->input('neighborhood');
		echo $this->Form->input('street_address');
		echo $this->Form->input('street_number');
		echo $this->Form->input('post_box');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Address.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Address.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Address Coordinates'), array('controller' => 'address_coordinates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Coordinate'), array('controller' => 'address_coordinates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Address Establishments'), array('controller' => 'address_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Establishment'), array('controller' => 'address_establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
