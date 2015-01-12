<div class="dishEstablishments form">
<?php echo $this->Form->create('DishEstablishment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dish Establishment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dish_id');
		echo $this->Form->input('establishment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DishEstablishment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DishEstablishment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dish Establishments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
