<div class="addressEstablishments form">
<?php echo $this->Form->create('AddressEstablishment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Address Establishment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('establishment_id');
		echo $this->Form->input('address_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AddressEstablishment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AddressEstablishment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Address Establishments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
