<div class="dishes view">
<h2><?php echo __('Dish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredient'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['ingredient']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dish'), array('action' => 'edit', $dish['Dish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dish'), array('action' => 'delete', $dish['Dish']['id']), null, __('Are you sure you want to delete # %s?', $dish['Dish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Establishments'), array('controller' => 'dish_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Establishment'), array('controller' => 'dish_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Pageviews'), array('controller' => 'dish_pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Pageview'), array('controller' => 'dish_pageviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Rates'), array('controller' => 'dish_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Rate'), array('controller' => 'dish_rates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dish Establishments'); ?></h3>
	<?php if (!empty($dish['DishEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dish['DishEstablishment'] as $dishEstablishment): ?>
		<tr>
			<td><?php echo $dishEstablishment['id']; ?></td>
			<td><?php echo $dishEstablishment['dish_id']; ?></td>
			<td><?php echo $dishEstablishment['establishment_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dish_establishments', 'action' => 'view', $dishEstablishment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dish_establishments', 'action' => 'edit', $dishEstablishment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dish_establishments', 'action' => 'delete', $dishEstablishment['id']), null, __('Are you sure you want to delete # %s?', $dishEstablishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dish Establishment'), array('controller' => 'dish_establishments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dish Pageviews'); ?></h3>
	<?php if (!empty($dish['DishPageview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th><?php echo __('Pageview Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dish['DishPageview'] as $dishPageview): ?>
		<tr>
			<td><?php echo $dishPageview['id']; ?></td>
			<td><?php echo $dishPageview['dish_id']; ?></td>
			<td><?php echo $dishPageview['pageview_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dish_pageviews', 'action' => 'view', $dishPageview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dish_pageviews', 'action' => 'edit', $dishPageview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dish_pageviews', 'action' => 'delete', $dishPageview['id']), null, __('Are you sure you want to delete # %s?', $dishPageview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dish Pageview'), array('controller' => 'dish_pageviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dish Rates'); ?></h3>
	<?php if (!empty($dish['DishRate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Rate Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dish['DishRate'] as $dishRate): ?>
		<tr>
			<td><?php echo $dishRate['id']; ?></td>
			<td><?php echo $dishRate['user_id']; ?></td>
			<td><?php echo $dishRate['rate_id']; ?></td>
			<td><?php echo $dishRate['dish_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dish_rates', 'action' => 'view', $dishRate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dish_rates', 'action' => 'edit', $dishRate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dish_rates', 'action' => 'delete', $dishRate['id']), null, __('Are you sure you want to delete # %s?', $dishRate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dish Rate'), array('controller' => 'dish_rates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
