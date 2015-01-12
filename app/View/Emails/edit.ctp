<div class="emails form">
<?php echo $this->Form->create('Email'); ?>
	<fieldset>
		<legend><?php echo __('Edit Email'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Email.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Email.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Emails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Email Establishments'), array('controller' => 'email_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Establishment'), array('controller' => 'email_establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
