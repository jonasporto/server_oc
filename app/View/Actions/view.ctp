<div class="actions view">
<h2><?php echo __('Action'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($action['Action']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($action['Action']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action'), array('action' => 'edit', $action['Action']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action'), array('action' => 'delete', $action['Action']['id']), null, __('Are you sure you want to delete # %s?', $action['Action']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Dishes'), array('controller' => 'action_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Dish'), array('controller' => 'action_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Establishments'), array('controller' => 'action_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Establishment'), array('controller' => 'action_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Users'), array('controller' => 'action_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action User'), array('controller' => 'action_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Action Dishes'); ?></h3>
	<?php if (!empty($action['ActionDish'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th><?php echo __('Action Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($action['ActionDish'] as $actionDish): ?>
		<tr>
			<td><?php echo $actionDish['id']; ?></td>
			<td><?php echo $actionDish['dish_id']; ?></td>
			<td><?php echo $actionDish['action_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'action_dishes', 'action' => 'view', $actionDish['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'action_dishes', 'action' => 'edit', $actionDish['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'action_dishes', 'action' => 'delete', $actionDish['id']), null, __('Are you sure you want to delete # %s?', $actionDish['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Action Dish'), array('controller' => 'action_dishes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Action Establishments'); ?></h3>
	<?php if (!empty($action['ActionEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Action Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($action['ActionEstablishment'] as $actionEstablishment): ?>
		<tr>
			<td><?php echo $actionEstablishment['id']; ?></td>
			<td><?php echo $actionEstablishment['establishment_id']; ?></td>
			<td><?php echo $actionEstablishment['action_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'action_establishments', 'action' => 'view', $actionEstablishment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'action_establishments', 'action' => 'edit', $actionEstablishment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'action_establishments', 'action' => 'delete', $actionEstablishment['id']), null, __('Are you sure you want to delete # %s?', $actionEstablishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Action Establishment'), array('controller' => 'action_establishments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Action Users'); ?></h3>
	<?php if (!empty($action['ActionUser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Action Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($action['ActionUser'] as $actionUser): ?>
		<tr>
			<td><?php echo $actionUser['id']; ?></td>
			<td><?php echo $actionUser['user_id']; ?></td>
			<td><?php echo $actionUser['action_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'action_users', 'action' => 'view', $actionUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'action_users', 'action' => 'edit', $actionUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'action_users', 'action' => 'delete', $actionUser['id']), null, __('Are you sure you want to delete # %s?', $actionUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Action User'), array('controller' => 'action_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
