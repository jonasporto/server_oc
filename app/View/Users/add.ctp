<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('Email.address');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
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


<?=$user; ?>