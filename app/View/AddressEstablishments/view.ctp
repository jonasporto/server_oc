<div class="addressEstablishments view">
<h2><?php echo __('Address Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($addressEstablishment['AddressEstablishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Establishment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($addressEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $addressEstablishment['Establishment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($addressEstablishment['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $addressEstablishment['Address']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address Establishment'), array('action' => 'edit', $addressEstablishment['AddressEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address Establishment'), array('action' => 'delete', $addressEstablishment['AddressEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $addressEstablishment['AddressEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Address Establishments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Establishment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
