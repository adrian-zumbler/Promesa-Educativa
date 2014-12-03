<section class="Login">
	<div class="Login-form">
		<?php
			$optionsButton = array(
				'label'=> 'Entrar',
				'class'=> 'btn btn-lg btn-primary',
				'div' => false
				);
			echo $this->Form->create('User',array('action' => 'login'));
			echo $this->Form->input('username',array(
				'div'=> array(
					'class'=> 'Login-formInput'),
				'label'=> 'Usuario:',
				'placeholder' => 'Usuario'
				));
			echo $this->Form->input('password',array(
				'div'=> array(
					'class'=> 'Login-formInput'),
				'label'=> 'Contraseña:',
				'placeholder' => 'Contraseña'
				));
			echo $this->Form->end($optionsButton);
		?>	
		<?php echo $this->Session->flash(); ?>
	</div>
	
</section>
