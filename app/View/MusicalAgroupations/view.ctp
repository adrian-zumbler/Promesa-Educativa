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
							'/SEWA/participants/view/',
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
<section class="SearchPanel">
	<div class="SearchPanel-searchContainer">
		<?php
			$optionsButton = array(
				'label'=> 'Buscar',
				'class'=> 'btn btn-lg btn-primary',
				'div' => false
				);
			echo $this->Form->create('MusicalAgroupation', array('controller' => 'MusicalAgroupation', 'action'=> 'view'));
			echo $this->Form->input('Nombre', array(
				'label' => 'Nombre:',
				'placeholder'=> 'Agrupación',
				'div' => array(
					'class' => 'SearchPanel-formInput')
				)
			);
			echo $this->Form->end($optionsButton);
		?>
	</div>
	<div class="SearchPanel-addContainer">
			<?php
						 echo $this->Html->link(
							'Agregar',
							'/SEWA/agroupations/add/',
							array(
								'class' =>'class="fui-plus-circle'
								)
						);
					?>
	</div>

	<div class="SearchPanel-listContainer">
		<ul id="agroupationList" class="SearchPanel-list">
			<?php
				foreach ($agroupations as $agroupation) {
					 echo '<li class="SearchPanel-item" id="item" value="' . $agroupation['MusicalAgroupation']['id'] .'">'.  $agroupation['MusicalAgroupation']['name'] . '</li>';
				}
			?>
		</ul>
	</div>


</section>
<div class="View">
	<div class="View-container">
		<h3 class="View-title">
			Información general
		</h3>
		<p class ="View-name"  id="name">
			Nombre: 
		</p>
		<p  id="schedule">
			Horario de labores: 
		</p>
		<p  id="conformation">
			Tiempo en la agruación: 
		</p>
		<p  id="work_hours">
			Horas de trabajo diarias: 
		</p>
		<p  id="work_days">
			Dias de trabajo a la semana: 
		</p>
		<p  id="frecuency">
			Frecuencia de presenteciones: 
		</p>
		<p  id="integrants">
			Numero de integrantes: 
		</p>
		<p  id="entity">
			Entidad: 
		</p>
		<p  id="seat">
			Sede: 
		</p>


		
	</div>
</div>

<script type="text/javascript">
	

</script>
