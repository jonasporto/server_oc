<div class="dishEstablishments index">
	<h2><?php echo __('Dish Establishments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('establishment_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dishEstablishments as $dishEstablishment): ?>
	<tr>
		<td><?php echo h($dishEstablishment['DishEstablishment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dishEstablishment['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $dishEstablishment['Dish']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dishEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $dishEstablishment['Establishment']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dishEstablishment['DishEstablishment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dishEstablishment['DishEstablishment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dishEstablishment['DishEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $dishEstablishment['DishEstablishment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dish Establishment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
