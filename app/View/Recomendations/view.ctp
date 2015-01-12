<div class="recomendations view">
<h2><?php echo __('Recomendation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recomendation['Recomendation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($recomendation['Recomendation']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recomendation'), array('action' => 'edit', $recomendation['Recomendation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recomendation'), array('action' => 'delete', $recomendation['Recomendation']['id']), null, __('Are you sure you want to delete # %s?', $recomendation['Recomendation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recomendations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recomendation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
