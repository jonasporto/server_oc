<div class="telephones view">
<h2><?php echo __('Telephone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($telephone['Telephone']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code'); ?></dt>
		<dd>
			<?php echo h($telephone['Telephone']['country_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('D A Code'); ?></dt>
		<dd>
			<?php echo h($telephone['Telephone']['d_a_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone Number'); ?></dt>
		<dd>
			<?php echo h($telephone['Telephone']['telephone_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Telephone'), array('action' => 'edit', $telephone['Telephone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Telephone'), array('action' => 'delete', $telephone['Telephone']['id']), null, __('Are you sure you want to delete # %s?', $telephone['Telephone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Telephones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telephone'), array('action' => 'add')); ?> </li>
	</ul>
</div>
