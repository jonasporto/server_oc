<div class="emailEstablishments view">
<h2><?php echo __('Email Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($emailEstablishment['EmailEstablishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Establishment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $emailEstablishment['Establishment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailEstablishment['Email']['id'], array('controller' => 'emails', 'action' => 'view', $emailEstablishment['Email']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Email Establishment'), array('action' => 'edit', $emailEstablishment['EmailEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Email Establishment'), array('action' => 'delete', $emailEstablishment['EmailEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $emailEstablishment['EmailEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Email Establishments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Establishment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
	</ul>
</div>
