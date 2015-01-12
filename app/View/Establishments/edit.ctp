<div class="establishments form">
<?php echo $this->Form->create('Establishment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Establishment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Establishment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Establishment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('action' => 'index')); ?></li>
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
