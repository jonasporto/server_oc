<div class="dishes form">
<?php echo $this->Form->create('Dish'); ?>
	<fieldset>
		<legend><?php echo __('Add Dish'); ?></legend>
	<?php
		echo $this->Form->input('ingredient');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dishes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dish Establishments'), array('controller' => 'dish_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Establishment'), array('controller' => 'dish_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Pageviews'), array('controller' => 'dish_pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Pageview'), array('controller' => 'dish_pageviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Rates'), array('controller' => 'dish_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Rate'), array('controller' => 'dish_rates', 'action' => 'add')); ?> </li>
	</ul>
</div>
