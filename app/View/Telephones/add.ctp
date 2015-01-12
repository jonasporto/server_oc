<div class="telephones form">
<?php echo $this->Form->create('Telephone'); ?>
	<fieldset>
		<legend><?php echo __('Add Telephone'); ?></legend>
	<?php
		echo $this->Form->input('country_code');
		echo $this->Form->input('d_a_code');
		echo $this->Form->input('telephone_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Telephones'), array('action' => 'index')); ?></li>
	</ul>
</div>
