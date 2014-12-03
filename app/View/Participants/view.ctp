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
				'placeholder'=> 'Nombre',
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
		<ul id="participantList" class="SearchPanel-list">
			<?php
				foreach ($participants as $participant) {
					 echo '<li class="SearchPanel-item" id="item" value="' . $participant['Participant']['id'] .'">' .  $participant['Participant']['first_name'] .  ' ' . $participant['Participant']['last_name'] . '</li>';
				}
			?>
		</ul>
	</div>


</section>
<div class="View">
	<table class="Table">
		
		<tr class="Table-header" >
			<td class="Table-titleContainer">
				<span class="Table-title">
					Nombre Completo
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Curp
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Age
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Genero
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Tiempo en la agrupación
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Familiares
				</span>
			</td>
			<td class="Table-titleContainer large">
				<span class="Table-title">
					Agrupación
				</span>
			</td>
			<td class="Table-titleContainer">
				<span class="Table-title">
					Instrumento
				</span>
			</td>
			
		</tr>
		<tr class="Table-row">
			<td class="Table-colum">
				<span id="completeName" class="Table-information">
					Adrian Meza Maldonado
				</span>
			</td>
			<td class="Table-colum">
				<span id="curp" class="Table-information">
					JIMN020430M0CMRYA5
				</span>
			</td>
			<td class="Table-colum">
				<span id="age" class="Table-information">
					12
				</span>
			</td>
			<td class="Table-colum">
				<span id="genre" class="Table-information">
					Masculino
				</span>
			</td>
			<td class="Table-colum">
				<span id="time_agroupation" class="Table-information">
					3 años
				</span>
			</td>
			<td class="Table-colum">
				<span id="family" class="Table-information">
					1
				</span>
			</td>
			<td class="Table-colum">
				<span id="agroupation" class="Table-information">
					Orquesta Sinfonica Comunitaria Quinta Carolina
				</span>
			</td>
			<td class="Table-colum">
				<span id="instrument" class="Table-information">
					Violin I
				</span>
			</td>


		</tr>
	</table>
</div>
</div>