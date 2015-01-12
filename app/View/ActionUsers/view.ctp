<div class="actionUsers view">
<h2><?php echo __('Action User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actionUser['ActionUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actionUser['User']['name'], array('controller' => 'users', 'action' => 'view', $actionUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actionUser['Action']['id'], array('controller' => 'actions', 'action' => 'view', $actionUser['Action']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action User'), array('action' => 'edit', $actionUser['ActionUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action User'), array('action' => 'delete', $actionUser['ActionUser']['id']), null, __('Are you sure you want to delete # %s?', $actionUser['ActionUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
