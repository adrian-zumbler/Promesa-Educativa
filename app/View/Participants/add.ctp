
<section class="RegisterSewa">
<h3>Registro de alumnos</h3>
	<div class="RegisterSewa-form">

			<?php

				$divOptions = array(
						'class' => 'RegisterSewa-formInput'	
					);
				$optionsButton = array(
				'label'=> 'Registrar',
				'class'=> 'btn btn-lg btn-primary',
				'div' => false
				);
				echo $this->Form->create('Participant',array('action' => 'add'));
				echo $this->Form->input('first_name',array(
					'label' => 'Nombre',
					'div'=> $divOptions,
					'placeholder' => 'Nombre'));
				echo $this->Form->input('last_name',array(
					'label' => 'Apellidos',
					'div'=> $divOptions,
					'placeholder' => 'Apellidos'));
				echo $this->Form->input('curp',array(
					'label' => 'Curp',
					'div'=> $divOptions,
					'placeholder' => 'Curp'));
				echo $this->Form->input('age',array(
					'label' => 'Edad',
					'div'=> $divOptions,
					'placeholder' => 'Edad'));
				echo $this->Form->input('genre',array(
					'label' => 'Genero',
					'div'=> $divOptions,
					'options' => array('femenino' => 'Femenino','masculino'=>'Masculino')));
				echo $this->Form->input('time_in_agroupation',array(
					'label' => 'Tiempo en la agrupación',
					'div'=> $divOptions,
					'placeholder' => 'Tiempo en la agrupación'));
				echo $this->Form->input('number_family',array(
					'label' => 'Familiares',
					'div'=> array(
						'class' => 'RegisterSewa-formInput'),
					'placeholder' => 'Familiares'));
				echo $this->Form->input('musical_agroupation_id',array(
					'options' => $agroupations,
					'div' => $divOptions,
					'label' => 'Entidad'
					));
				echo $this->Form->input('instrument_id',array(
					'options' => $instruments,
					'div' => $divOptions,
					'label' => 'Sede'
					));
				
				echo $this->Form->end($optionsButton);
			?>

			<?php echo $this->Session->flash(); ?>
	</div>


	
</section>