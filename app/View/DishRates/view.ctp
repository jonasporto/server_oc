<div class="dishRates view">
<h2><?php echo __('Dish Rate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dishRate['DishRate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dishRate['User']['name'], array('controller' => 'users', 'action' => 'view', $dishRate['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dishRate['Rate']['id'], array('controller' => 'rates', 'action' => 'view', $dishRate['Rate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dishRate['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $dishRate['Dish']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dish Rate'), array('action' => 'edit', $dishRate['DishRate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dish Rate'), array('action' => 'delete', $dishRate['DishRate']['id']), null, __('Are you sure you want to delete # %s?', $dishRate['DishRate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Rates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Rate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rates'), array('controller' => 'rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate'), array('controller' => 'rates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
