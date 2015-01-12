<div class="actions form">
<?php echo $this->Form->create('Action'); ?>
	<fieldset>
		<legend><?php echo __('Edit Action'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Action.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Action.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Action Dishes'), array('controller' => 'action_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Dish'), array('controller' => 'action_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Establishments'), array('controller' => 'action_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Establishment'), array('controller' => 'action_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Users'), array('controller' => 'action_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action User'), array('controller' => 'action_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
