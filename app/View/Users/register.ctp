
<section class="Register">
<h3>Registra un usuario en la campaña</h3>
	<div class="Register-form">

			<?php
				$divOptions = array(
						'class' => 'Register-formInput'	
					);
				$optionsButton = array(
				'label'=> 'Registrar',
				'class'=> 'btn btn-lg btn-primary',
				'div' => false
				);
				echo $this->Form->create('User',array('action' => 'register'));
				echo $this->Form->input('first_name',array(
					'label' => 'Nombre',
					'div'=> $divOptions,
					'placeholder' => 'Nombre'));
				echo $this->Form->input('last_name',array(
					'label' => 'Apellidos',
					'div'=> $divOptions,
					'placeholder' => 'Apellidos'));
				echo $this->Form->input('username',array(
					'label' => 'Usuario',
					'div'=> $divOptions,
					'placeholder' => 'Usuario'));
				echo $this->Form->input('password',array(
					'label' => 'Contraseña',
					'div'=> $divOptions,
					'placeholder' => 'Contraseña'));
				echo $this->Form->input('email',array(
					'label' => 'Correo',
					'div'=> $divOptions,
					'placeholder' => 'Correo'));
				echo $this->Form->input('phone',array(
					'label' => 'Telefono',
					'div'=> $divOptions,
					'placeholder' => 'Telefono'));
				echo $this->Form->input('group_id', array(
					'options' => $groups,
					'label' => 'Campaña',
					'div'=> $divOptions,));
				echo $this->Form->end($optionsButton);
			?>
	</div>


	
</section>

