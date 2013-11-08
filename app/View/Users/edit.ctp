<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend>Edit User</legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
	if($current_user['role'] == 'admin'){
		echo $this->Form->radio('role', array('regular' => 'regular', 'admin' => 'admin'), array('value' => 'regular'));
	}
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('List Users', array('action' => 'index'));?></li>
	</ul>
</div>
