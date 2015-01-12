<div class="dishRates index">
	<h2><?php echo __('Dish Rates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dish_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dishRates as $dishRate): ?>
	<tr>
		<td><?php echo h($dishRate['DishRate']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dishRate['User']['name'], array('controller' => 'users', 'action' => 'view', $dishRate['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dishRate['Rate']['id'], array('controller' => 'rates', 'action' => 'view', $dishRate['Rate']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dishRate['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $dishRate['Dish']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dishRate['DishRate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dishRate['DishRate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dishRate['DishRate']['id']), null, __('Are you sure you want to delete # %s?', $dishRate['DishRate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dish Rate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rates'), array('controller' => 'rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate'), array('controller' => 'rates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
