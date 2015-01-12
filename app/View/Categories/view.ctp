<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($category['Category']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Dishes'), array('controller' => 'category_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Dish'), array('controller' => 'category_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Establishments'), array('controller' => 'category_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Establishment'), array('controller' => 'category_establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Category Dishes'); ?></h3>
	<?php if (!empty($category['CategoryDish'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['CategoryDish'] as $categoryDish): ?>
		<tr>
			<td><?php echo $categoryDish['id']; ?></td>
			<td><?php echo $categoryDish['category_id']; ?></td>
			<td><?php echo $categoryDish['dish_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'category_dishes', 'action' => 'view', $categoryDish['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'category_dishes', 'action' => 'edit', $categoryDish['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'category_dishes', 'action' => 'delete', $categoryDish['id']), null, __('Are you sure you want to delete # %s?', $categoryDish['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Category Dish'), array('controller' => 'category_dishes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Category Establishments'); ?></h3>
	<?php if (!empty($category['CategoryEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['CategoryEstablishment'] as $categoryEstablishment): ?>
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
