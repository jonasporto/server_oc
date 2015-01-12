<div class="establishments index">
	<h2><?php echo __('Establishments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishments as $establishment): ?>
	<tr>
		<td><?php echo h($establishment['Establishment']['id']); ?>&nbsp;</td>
		<td><?php echo utf8_encode($establishment['Establishment']['name']); ?>&nbsp;</td>
		<td><?php echo utf8_encode($establishment['Establishment']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $establishment['Establishment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $establishment['Establishment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $establishment['Establishment']['id']), null, __('Are you sure you want to delete # %s?', $establishment['Establishment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Establishment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Action Establishments'), array('controller' => 'action_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Establishment'), array('controller' => 'action_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Address Establishments'), array('controller' => 'address_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Establishment'), array('controller' => 'address_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Establishments'), array('controller' => 'category_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Establishment'), array('controller' => 'category_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Establishments'), array('controller' => 'dish_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Establishment'), array('controller' => 'dish_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Email Establishments'), array('controller' => 'email_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Establishment'), array('controller' => 'email_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Files'), array('controller' => 'establishment_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment File'), array('controller' => 'establishment_files', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Pageviews'), array('controller' => 'establishment_pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment Pageview'), array('controller' => 'establishment_pageviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Rates'), array('controller' => 'establishment_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment Rate'), array('controller' => 'establishment_rates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Telephones'), array('controller' => 'establishment_telephones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment Telephone'), array('controller' => 'establishment_telephones', 'action' => 'add')); ?> </li>
	</ul>
</div>
