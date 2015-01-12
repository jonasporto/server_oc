<div class="dishPageviews index">
	<h2><?php echo __('Dish Pageviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pageview_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dishPageviews as $dishPageview): ?>
	<tr>
		<td><?php echo h($dishPageview['DishPageview']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dishPageview['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $dishPageview['Dish']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dishPageview['Pageview']['id'], array('controller' => 'pageviews', 'action' => 'view', $dishPageview['Pageview']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dishPageview['DishPageview']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dishPageview['DishPageview']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dishPageview['DishPageview']['id']), null, __('Are you sure you want to delete # %s?', $dishPageview['DishPageview']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dish Pageview'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pageviews'), array('controller' => 'pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pageview'), array('controller' => 'pageviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
