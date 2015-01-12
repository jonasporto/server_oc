<div class="addresses view">
<h2><?php echo __('Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($address['Address']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($address['Address']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($address['Address']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($address['Address']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neighborhood'); ?></dt>
		<dd>
			<?php echo h($address['Address']['neighborhood']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($address['Address']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Number'); ?></dt>
		<dd>
			<?php echo h($address['Address']['street_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Box'); ?></dt>
		<dd>
			<?php echo h($address['Address']['post_box']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address'), array('action' => 'edit', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address'), array('action' => 'delete', $address['Address']['id']), null, __('Are you sure you want to delete # %s?', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Address Coordinates'), array('controller' => 'address_coordinates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Coordinate'), array('controller' => 'address_coordinates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Address Establishments'), array('controller' => 'address_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Establishment'), array('controller' => 'address_establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Address Coordinates'); ?></h3>
	<?php if (!empty($address['AddressCoordinate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th><?php echo __('Coordinate Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($address['AddressCoordinate'] as $addressCoordinate): ?>
		<tr>
			<td><?php echo $addressCoordinate['id']; ?></td>
			<td><?php echo $addressCoordinate['address_id']; ?></td>
			<td><?php echo $addressCoordinate['coordinate_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'address_coordinates', 'action' => 'view', $addressCoordinate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'address_coordinates', 'action' => 'edit', $addressCoordinate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'address_coordinates', 'action' => 'delete', $addressCoordinate['id']), null, __('Are you sure you want to delete # %s?', $addressCoordinate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address Coordinate'), array('controller' => 'address_coordinates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Address Establishments'); ?></h3>
	<?php if (!empty($address['AddressEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($address['AddressEstablishment'] as $addressEstablishment): ?>
		<tr>
			<td><?php echo $addressEstablishment['id']; ?></td>
			<td><?php echo $addressEstablishment['establishment_id']; ?></td>
			<td><?php echo $addressEstablishment['address_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'address_establishments', 'action' => 'view', $addressEstablishment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'address_establishments', 'action' => 'edit', $addressEstablishment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'address_establishments', 'action' => 'delete', $addressEstablishment['id']), null, __('Are you sure you want to delete # %s?', $addressEstablishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address Establishment'), array('controller' => 'address_establishments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
