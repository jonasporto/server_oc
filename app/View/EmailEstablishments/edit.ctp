<div class="emailEstablishments form">
<?php echo $this->Form->create('EmailEstablishment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Email Establishment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('establishment_id');
		echo $this->Form->input('email_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmailEstablishment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmailEstablishment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Email Establishments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
	</ul>
</div>
