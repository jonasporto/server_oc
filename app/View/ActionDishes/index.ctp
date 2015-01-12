<div class="actionDishes index">
	<h2><?php echo __('Action Dishes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('action_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actionDishes as $actionDish): ?>
	<tr>
		<td><?php echo h($actionDish['ActionDish']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actionDish['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $actionDish['Dish']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($actionDish['Action']['id'], array('controller' => 'actions', 'action' => 'view', $actionDish['Action']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actionDish['ActionDish']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actionDish['ActionDish']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actionDish['ActionDish']['id']), null, __('Are you sure you want to delete # %s?', $actionDish['ActionDish']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Action Dish'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
