<div class="actions index">
	<h2><?php echo __('Actions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actions as $action): ?>
	<tr>
		<td><?php echo h($action['Action']['id']); ?>&nbsp;</td>
		<td><?php echo h($action['Action']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $action['Action']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $action['Action']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $action['Action']['id']), null, __('Are you sure you want to delete # %s?', $action['Action']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Action'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Action Dishes'), array('controller' => 'action_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Dish'), array('controller' => 'action_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Establishments'), array('controller' => 'action_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Establishment'), array('controller' => 'action_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Users'), array('controller' => 'action_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action User'), array('controller' => 'action_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
