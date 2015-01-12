<div class="addressEstablishments index">
	<h2><?php echo __('Address Establishments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('establishment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($addressEstablishments as $addressEstablishment): ?>
	<tr>
		<td><?php echo h($addressEstablishment['AddressEstablishment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($addressEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $addressEstablishment['Establishment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($addressEstablishment['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $addressEstablishment['Address']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $addressEstablishment['AddressEstablishment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $addressEstablishment['AddressEstablishment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $addressEstablishment['AddressEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $addressEstablishment['AddressEstablishment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Address Establishment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
