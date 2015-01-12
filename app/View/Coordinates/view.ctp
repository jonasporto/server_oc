<div class="coordinates view">
<h2><?php echo __('Coordinate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coordinate['Coordinate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($coordinate['Coordinate']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lng'); ?></dt>
		<dd>
			<?php echo h($coordinate['Coordinate']['lng']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coordinate'), array('action' => 'edit', $coordinate['Coordinate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coordinate'), array('action' => 'delete', $coordinate['Coordinate']['id']), null, __('Are you sure you want to delete # %s?', $coordinate['Coordinate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coordinates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coordinate Users'), array('controller' => 'coordinate_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coordinate User'), array('controller' => 'coordinate_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Coordinate Users'); ?></h3>
	<?php if (!empty($coordinate['CoordinateUser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Coordinate Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($coordinate['CoordinateUser'] as $coordinateUser): ?>
		<tr>
			<td><?php echo $coordinateUser['id']; ?></td>
			<td><?php echo $coordinateUser['user_id']; ?></td>
			<td><?php echo $coordinateUser['coordinate_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'coordinate_users', 'action' => 'view', $coordinateUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'coordinate_users', 'action' => 'edit', $coordinateUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'coordinate_users', 'action' => 'delete', $coordinateUser['id']), null, __('Are you sure you want to delete # %s?', $coordinateUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coordinate User'), array('controller' => 'coordinate_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
