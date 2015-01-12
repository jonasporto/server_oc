<div class="rates form">
<?php echo $this->Form->create('Rate'); ?>
	<fieldset>
		<legend><?php echo __('Add Rate'); ?></legend>
	<?php
		echo $this->Form->input('grade');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rates'), array('action' => 'index')); ?></li>
	</ul>
</div>
