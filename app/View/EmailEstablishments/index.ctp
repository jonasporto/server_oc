<div class="emailEstablishments index">
	<h2><?php echo __('Email Establishments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('establishment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($emailEstablishments as $emailEstablishment): ?>
	<tr>
		<td><?php echo h($emailEstablishment['EmailEstablishment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($emailEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $emailEstablishment['Establishment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($emailEstablishment['Email']['id'], array('controller' => 'emails', 'action' => 'view', $emailEstablishment['Email']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $emailEstablishment['EmailEstablishment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $emailEstablishment['EmailEstablishment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $emailEstablishment['EmailEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $emailEstablishment['EmailEstablishment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Email Establishment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
	</ul>
</div>
