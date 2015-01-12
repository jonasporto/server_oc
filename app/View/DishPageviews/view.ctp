<div class="dishPageviews view">
<h2><?php echo __('Dish Pageview'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dishPageview['DishPageview']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dishPageview['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $dishPageview['Dish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pageview'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dishPageview['Pageview']['id'], array('controller' => 'pageviews', 'action' => 'view', $dishPageview['Pageview']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dish Pageview'), array('action' => 'edit', $dishPageview['DishPageview']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dish Pageview'), array('action' => 'delete', $dishPageview['DishPageview']['id']), null, __('Are you sure you want to delete # %s?', $dishPageview['DishPageview']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Pageviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Pageview'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pageviews'), array('controller' => 'pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pageview'), array('controller' => 'pageviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
