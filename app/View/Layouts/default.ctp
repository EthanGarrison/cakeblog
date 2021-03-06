<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
//		echo $this->Html->css('default_layout');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Blog</h1>
			<div style="text-align: right;"><?php echo $this->Html->link('Home', array('controller'=>'posts', 'action'=>'index')); ?></div>
		</div>
		<div id="content">
		
		    <div style="text-align: right;">
		        <?php if ($logged_in): ?>
		            Welcome <?php echo $this->Html->link($current_user['username'], array('controller' => 'users', 'action' => 'view', $current_user['id'])); ?>. <?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
		        <?php else: ?>
		            <?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>
					<?php echo $this->Html->link('Register', array('controller'=>'users', 'action'=>'add')); ?>
		        <?php endif; ?>
		    </div>

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</body>
</html>
