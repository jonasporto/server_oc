<div class="coordinateUsers view">
<h2><?php echo __('Coordinate User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coordinateUser['CoordinateUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coordinateUser['User']['name'], array('controller' => 'users', 'action' => 'view', $coordinateUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coordinate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coordinateUser['Coordinate']['id'], array('controller' => 'coordinates', 'action' => 'view', $coordinateUser['Coordinate']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coordinate User'), array('action' => 'edit', $coordinateUser['CoordinateUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coordinate User'), array('action' => 'delete', $coordinateUser['CoordinateUser']['id']), null, __('Are you sure you want to delete # %s?', $coordinateUser['CoordinateUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coordinate Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coordinates'), array('controller' => 'coordinates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate'), array('controller' => 'coordinates', 'action' => 'add')); ?> </li>
	</ul>
</div>
