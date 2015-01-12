<div class="categoryEstablishments view">
<h2><?php echo __('Category Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryEstablishment['CategoryEstablishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Establishment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryEstablishment['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $categoryEstablishment['Establishment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryEstablishment['Category']['title'], array('controller' => 'categories', 'action' => 'view', $categoryEstablishment['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category Establishment'), array('action' => 'edit', $categoryEstablishment['CategoryEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category Establishment'), array('action' => 'delete', $categoryEstablishment['CategoryEstablishment']['id']), null, __('Are you sure you want to delete # %s?', $categoryEstablishment['CategoryEstablishment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Establishments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Establishment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
