<div class="actionEstablishments form">
<?php echo $this->Form->create('ActionEstablishment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Action Establishment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('establishment_id');
		echo $this->Form->input('action_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActionEstablishment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ActionEstablishment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Action Establishments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
