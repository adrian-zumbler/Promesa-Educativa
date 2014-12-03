<section class="Menu">
	<nav class="Menu-container">
		<ul class="Menu-list">
			<li class="Menu-option">
					<?php
						 echo $this->Html->link(
							'Agrupaciones Musicales',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>
			<li class="Menu-option">
					<?php
						 echo $this->Html->link(
							'Inscritos',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>
			<li class="Menu-option">
				<?php
						 echo $this->Html->link(
							'Personal',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>
			<li class="Menu-option">
				<?php
						 echo $this->Html->link(
							'Instrumentos',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-link"'
								)
						);
					?>
			</li>
		</ul>
	</nav>
</section>
<section class="RegisterSewa">
<h3>Registro de la agrupacion musical</h3>
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
				echo $this->Form->create('MusicalAgroupation',array('action' => 'add'));
				echo $this->Form->input('name',array(
					'label' => 'Nombre de la agrupación',
					'div'=> $divOptions,
					'placeholder' => 'Nombre de la agrupación'));
				echo $this->Form->input('work_schedule',array(
					'label' => 'Horario de trabajo',
					'div'=> $divOptions,
					'placeholder' => 'Horario de trabajo'));
				echo $this->Form->input('conformation_time_agroupation',array(
					'label' => 'Tiempo de la agrupación',
					'div'=> $divOptions,
					'placeholder' => 'Tiempo de la agrupación'));
				echo $this->Form->input('daily_work_hours',array(
					'label' => 'Horas a la semana',
					'div'=> $divOptions,
					'placeholder' => 'Horas a la semana'));
				echo $this->Form->input('week_work',array(
					'label' => 'Dias laborales',
					'div'=> $divOptions,
					'placeholder' => 'Dias laborales'));
				echo $this->Form->input('presentation_concert_frecuency',array(
					'label' => 'Frecuencia de presentaciones',
					'div'=> $divOptions,
					'placeholder' => 'Frecuencia de presentaciones'));
				echo $this->Form->input('number_integrants',array(
					'label' => 'Numero de integrantes',
					'div'=> array(
						'class' => 'RegisterSewa-formInput'),
					'placeholder' => 'Numero de integrantes'));
				echo $this->Form->input('entity_id',array(
					'options' => $entities,
					'div' => $divOptions,
					'label' => 'Entidad'
					));
				echo $this->Form->input('seat_id',array(
					'options' => $seats,
					'div' => $divOptions,
					'label' => 'Sede'
					));
				
				echo $this->Form->end($optionsButton);
			?>
			<?php echo $this->Session->flash(); ?>
	</div>


	
</section>