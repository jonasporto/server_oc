<div class="dishEstablishments view">
<h2><?php echo __('Dish Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dishEstablishment['DishEstablishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dishEstablishment['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $dishEstablishment['Dish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Establishment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dishEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $dishEstablishment['Establishment']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dish Establishment'), array('action' => 'edit', $dishEstablishment['DishEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dish Establishment'), array('action' => 'delete', $dishEstablishment['DishEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $dishEstablishment['DishEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Establishments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Establishment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
