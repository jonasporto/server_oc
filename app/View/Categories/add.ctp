<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Category Dishes'), array('controller' => 'category_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Dish'), array('controller' => 'category_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Establishments'), array('controller' => 'category_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Establishment'), array('controller' => 'category_establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
