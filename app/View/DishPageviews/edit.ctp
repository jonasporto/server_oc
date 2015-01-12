<div class="dishPageviews form">
<?php echo $this->Form->create('DishPageview'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dish Pageview'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dish_id');
		echo $this->Form->input('pageview_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DishPageview.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DishPageview.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dish Pageviews'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pageviews'), array('controller' => 'pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pageview'), array('controller' => 'pageviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
