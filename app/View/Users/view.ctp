<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Rates'), array('controller' => 'dish_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Rate'), array('controller' => 'dish_rates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Rates'), array('controller' => 'establishment_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment Rate'), array('controller' => 'establishment_rates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Followers'), array('controller' => 'followers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Follower'), array('controller' => 'followers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pageviews'), array('controller' => 'pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pageview'), array('controller' => 'pageviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Recomendations'), array('controller' => 'user_recomendations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Recomendation'), array('controller' => 'user_recomendations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dish Rates'); ?></h3>
	<?php if (!empty($user['DishRate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Rate Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['DishRate'] as $dishRate): ?>
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
<div class="related">
	<h3><?php echo __('Related Establishment Rates'); ?></h3>
	<?php if (!empty($user['EstablishmentRate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Rate Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['EstablishmentRate'] as $establishmentRate): ?>
		<tr>
			<td><?php echo $establishmentRate['id']; ?></td>
			<td><?php echo $establishmentRate['user_id']; ?></td>
			<td><?php echo $establishmentRate['rate_id']; ?></td>
			<td><?php echo $establishmentRate['establishment_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'establishment_rates', 'action' => 'view', $establishmentRate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'establishment_rates', 'action' => 'edit', $establishmentRate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'establishment_rates', 'action' => 'delete', $establishmentRate['id']), null, __('Are you sure you want to delete # %s?', $establishmentRate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Establishment Rate'), array('controller' => 'establishment_rates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Followers'); ?></h3>
	<?php if (!empty($user['Follower'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Follow User Id'); ?></th>
		<th><?php echo __('Accepted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Follower'] as $follower): ?>
		<tr>
			<td><?php echo $follower['id']; ?></td>
			<td><?php echo $follower['user_id']; ?></td>
			<td><?php echo $follower['follow_user_id']; ?></td>
			<td><?php echo $follower['accepted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'followers', 'action' => 'view', $follower['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'followers', 'action' => 'edit', $follower['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'followers', 'action' => 'delete', $follower['id']), null, __('Are you sure you want to delete # %s?', $follower['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Follower'), array('controller' => 'followers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pageviews'); ?></h3>
	<?php if (!empty($user['Pageview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Pageview'] as $pageview): ?>
		<tr>
			<td><?php echo $pageview['id']; ?></td>
			<td><?php echo $pageview['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pageviews', 'action' => 'view', $pageview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pageviews', 'action' => 'edit', $pageview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pageviews', 'action' => 'delete', $pageview['id']), null, __('Are you sure you want to delete # %s?', $pageview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pageview'), array('controller' => 'pageviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Recomendations'); ?></h3>
	<?php if (!empty($user['UserRecomendation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Recomendation Id'); ?></th>
		<th><?php echo __('To User Id'); ?></th>
		<th><?php echo __('Visualized'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserRecomendation'] as $userRecomendation): ?>
		<tr>
			<td><?php echo $userRecomendation['id']; ?></td>
			<td><?php echo $userRecomendation['user_id']; ?></td>
			<td><?php echo $userRecomendation['recomendation_id']; ?></td>
			<td><?php echo $userRecomendation['to_user_id']; ?></td>
			<td><?php echo $userRecomendation['visualized']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_recomendations', 'action' => 'view', $userRecomendation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_recomendations', 'action' => 'edit', $userRecomendation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_recomendations', 'action' => 'delete', $userRecomendation['id']), null, __('Are you sure you want to delete # %s?', $userRecomendation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Recomendation'), array('controller' => 'user_recomendations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
