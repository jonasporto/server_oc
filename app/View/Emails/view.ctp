<div class="emails view">
<h2><?php echo __('Email'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($email['Email']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($email['Email']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Email'), array('action' => 'edit', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Email'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Email Establishments'), array('controller' => 'email_establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Establishment'), array('controller' => 'email_establishments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Email Establishments'); ?></h3>
	<?php if (!empty($email['EmailEstablishment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Email Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($email['EmailEstablishment'] as $emailEstablishment): ?>
		<tr>
			<td><?php echo $emailEstablishment['id']; ?></td>
			<td><?php echo $emailEstablishment['establishment_id']; ?></td>
			<td><?php echo $emailEstablishment['email_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'email_establishments', 'action' => 'view', $emailEstablishment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'email_establishments', 'action' => 'edit', $emailEstablishment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'email_establishments', 'action' => 'delete', $emailEstablishment['id']), null, __('Are you sure you want to delete # %s?', $emailEstablishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email Establishment'), array('controller' => 'email_establishments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
