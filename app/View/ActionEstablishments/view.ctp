<div class="actionEstablishments view">
<h2><?php echo __('Action Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actionEstablishment['ActionEstablishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Establishment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actionEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $actionEstablishment['Establishment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actionEstablishment['Action']['id'], array('controller' => 'actions', 'action' => 'view', $actionEstablishment['Action']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action Establishment'), array('action' => 'edit', $actionEstablishment['ActionEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action Establishment'), array('action' => 'delete', $actionEstablishment['ActionEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $actionEstablishment['ActionEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Action Establishments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action Establishment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
