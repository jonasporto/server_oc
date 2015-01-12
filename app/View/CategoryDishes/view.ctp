<div class="categoryDishes view">
<h2><?php echo __('Category Dish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryDish['CategoryDish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryDish['Category']['title'], array('controller' => 'categories', 'action' => 'view', $categoryDish['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryDish['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $categoryDish['Dish']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category Dish'), array('action' => 'edit', $categoryDish['CategoryDish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category Dish'), array('action' => 'delete', $categoryDish['CategoryDish']['id']), null, __('Are you sure you want to delete # %s?', $categoryDish['CategoryDish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Dishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Dish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
