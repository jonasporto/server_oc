<div class="establishments view">
<h2><?php echo __('Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Establishment'), array('action' => 'edit', $establishment['Establishment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Establishment'), array('action' => 'delete', $establishment['Establishment']['id']), null, __('Are you sure you want to delete # %s?', $establishment['Establishment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Establishments'), array('controller' => 'action_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Establishment'), array('controller' => 'action_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Address Establishments'), array('controller' => 'address_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address Establishment'), array('controller' => 'address_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Establishments'), array('controller' => 'category_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Establishment'), array('controller' => 'category_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dish Establishments'), array('controller' => 'dish_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Establishment'), array('controller' => 'dish_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Email Establishments'), array('controller' => 'email_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Establishment'), array('controller' => 'email_establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Files'), array('controller' => 'establishment_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment File'), array('controller' => 'establishment_files', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Pageviews'), array('controller' => 'establishment_pageviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment Pageview'), array('controller' => 'establishment_pageviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Rates'), array('controller' => 'establishment_rates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment Rate'), array('controller' => 'establishment_rates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishment Telephones'), array('controller' => 'establishment_telephones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment Telephone'), array('controller' => 'establishment_telephones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Action Establishments'); ?></h3>
	<?php if (!empty($establishment['ActionEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Action Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['ActionEstablishment'] as $actionEstablishment): ?>
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
	<h3><?php echo __('Related Address Establishments'); ?></h3>
	<?php if (!empty($establishment['AddressEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['AddressEstablishment'] as $addressEstablishment): ?>
		<tr>
			<td><?php echo $addressEstablishment['id']; ?></td>
			<td><?php echo $addressEstablishment['establishment_id']; ?></td>
			<td><?php echo $addressEstablishment['address_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'address_establishments', 'action' => 'view', $addressEstablishment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'address_establishments', 'action' => 'edit', $addressEstablishment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'address_establishments', 'action' => 'delete', $addressEstablishment['id']), null, __('Are you sure you want to delete # %s?', $addressEstablishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address Establishment'), array('controller' => 'address_establishments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Category Establishments'); ?></h3>
	<?php if (!empty($establishment['CategoryEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['CategoryEstablishment'] as $categoryEstablishment): ?>
		<tr>
			<td><?php echo $categoryEstablishment['id']; ?></td>
			<td><?php echo $categoryEstablishment['establishment_id']; ?></td>
			<td><?php echo $categoryEstablishment['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'category_establishments', 'action' => 'view', $categoryEstablishment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'category_establishments', 'action' => 'edit', $categoryEstablishment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'category_establishments', 'action' => 'delete', $categoryEstablishment['id']), null, __('Are you sure you want to delete # %s?', $categoryEstablishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Category Establishment'), array('controller' => 'category_establishments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dish Establishments'); ?></h3>
	<?php if (!empty($establishment['DishEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['DishEstablishment'] as $dishEstablishment): ?>
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
	<h3><?php echo __('Related Email Establishments'); ?></h3>
	<?php if (!empty($establishment['EmailEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Email Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['EmailEstablishment'] as $emailEstablishment): ?>
		<tr>
			<td><?php echo $emailEstablishment['id']; ?></td>
			<td><?php echo $emailEstablishment['establishment_id']; ?></td>
			<td><?php echo $emailEstablishment['email_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'email_establishments', 'action' => 'view', $emailEstablishment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'email_establishments', 'action' => 'edit', $emailEstablishment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'email_establishments', 'action' => 'delete', $emailEstablishment['id']), null, __('Are you sure you want to delete # %s?', $emailEstablishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email Establishment'), array('controller' => 'email_establishments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Establishment Files'); ?></h3>
	<?php if (!empty($establishment['EstablishmentFile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('File Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['EstablishmentFile'] as $establishmentFile): ?>
		<tr>
			<td><?php echo $establishmentFile['id']; ?></td>
			<td><?php echo $establishmentFile['establishment_id']; ?></td>
			<td><?php echo $establishmentFile['file_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'establishment_files', 'action' => 'view', $establishmentFile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'establishment_files', 'action' => 'edit', $establishmentFile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'establishment_files', 'action' => 'delete', $establishmentFile['id']), null, __('Are you sure you want to delete # %s?', $establishmentFile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Establishment File'), array('controller' => 'establishment_files', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Establishment Pageviews'); ?></h3>
	<?php if (!empty($establishment['EstablishmentPageview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Pageview Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['EstablishmentPageview'] as $establishmentPageview): ?>
		<tr>
			<td><?php echo $establishmentPageview['id']; ?></td>
			<td><?php echo $establishmentPageview['establishment_id']; ?></td>
			<td><?php echo $establishmentPageview['pageview_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'establishment_pageviews', 'action' => 'view', $establishmentPageview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'establishment_pageviews', 'action' => 'edit', $establishmentPageview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'establishment_pageviews', 'action' => 'delete', $establishmentPageview['id']), null, __('Are you sure you want to delete # %s?', $establishmentPageview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Establishment Pageview'), array('controller' => 'establishment_pageviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Establishment Rates'); ?></h3>
	<?php if (!empty($establishment['EstablishmentRate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Rate Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['EstablishmentRate'] as $establishmentRate): ?>
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
	<h3><?php echo __('Related Establishment Telephones'); ?></h3>
	<?php if (!empty($establishment['EstablishmentTelephone'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Telephone Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($establishment['EstablishmentTelephone'] as $establishmentTelephone): ?>
		<tr>
			<td><?php echo $establishmentTelephone['id']; ?></td>
			<td><?php echo $establishmentTelephone['establishment_id']; ?></td>
			<td><?php echo $establishmentTelephone['telephone_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'establishment_telephones', 'action' => 'view', $establishmentTelephone['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'establishment_telephones', 'action' => 'edit', $establishmentTelephone['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'establishment_telephones', 'action' => 'delete', $establishmentTelephone['id']), null, __('Are you sure you want to delete # %s?', $establishmentTelephone['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Establishment Telephone'), array('controller' => 'establishment_telephones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
