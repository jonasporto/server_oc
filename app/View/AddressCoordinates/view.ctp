<div class="addressCoordinates view">
<h2><?php echo __('Address Coordinate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($addressCoordinate['AddressCoordinate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($addressCoordinate['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $addressCoordinate['Address']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coordinate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($addressCoordinate['Coordinate']['id'], array('controller' => 'coordinates', 'action' => 'view', $addressCoordinate['Coordinate']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address Coordinate'), array('action' => 'edit', $addressCoordinate['AddressCoordinate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address Coordinate'), array('action' => 'delete', $addressCoordinate['AddressCoordinate']['id']), null, __('Are you sure you want to delete # %s?', $addressCoordinate['AddressCoordinate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Address Coordinates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Coordinate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coordinates'), array('controller' => 'coordinates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate'), array('controller' => 'coordinates', 'action' => 'add')); ?> </li>
	</ul>
</div>
