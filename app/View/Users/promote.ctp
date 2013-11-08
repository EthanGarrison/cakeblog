<div class="users form">
	<?php echo $this->Form->create('User');?>
		<fieldset>
		<?php	
			// echo $this->Form->input('name', array('hidden' => true));
			// echo $this->Form->input('username', array('hidden' => true));
			// echo $this->Form->input('email', array('hidden' => true));
			echo $this->Form->input('role', array('value' => 'admin', 'hidden' => true)); 
		?>
		</fieldset>
		<script> 
				document.getElementById('UserPromoteForm').submit();
		</script>
</div>