<div class="actionDishes view">
<h2><?php echo __('Action Dish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actionDish['ActionDish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actionDish['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $actionDish['Dish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actionDish['Action']['id'], array('controller' => 'actions', 'action' => 'view', $actionDish['Action']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action Dish'), array('action' => 'edit', $actionDish['ActionDish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action Dish'), array('action' => 'delete', $actionDish['ActionDish']['id']), null, __('Are you sure you want to delete # %s?', $actionDish['ActionDish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Dishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Dish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
