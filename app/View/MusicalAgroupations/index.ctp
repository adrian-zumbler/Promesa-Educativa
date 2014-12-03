<section class="Menu">
	<nav class="Menu-container">
		<ul class="Menu-list">
			<li class="Menu-option">
					<?php
						 echo $this->Html->link(
							'Agrupaciones Musicales',
							'/SEWA/agroupations/view/',
							array(
								'class' =>'Menu-Link"'
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
								'class' =>'Menu-Link"'
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
								'class' =>'Menu-Link"'
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
								'class' =>'Menu-Link"'
								)
						);
					?>
			</li>
		</ul>
	</nav>
</section>
<section class="Welcome">
	<div class="Welcome-titleContainer">
		<h2 class="Welcome-title">
			Bienvenido: Adrian Meza
		</h2>
	</div>
	<div class="Welcome-descriptionContainer">
		<p class="Welcome-description">
			Este es el sistema de inventario de la Escuela Musical SEWA.
		</p>
	</div>
</section>