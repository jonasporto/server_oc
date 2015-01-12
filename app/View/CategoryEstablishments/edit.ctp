<div class="categoryEstablishments form">
<?php echo $this->Form->create('CategoryEstablishment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Category Establishment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('establishment_id');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoryEstablishment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CategoryEstablishment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Category Establishments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
