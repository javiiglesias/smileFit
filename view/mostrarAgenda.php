<div class="container">
	<div class="page-header">

		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
				<button class="btn" data-calendar-nav="today">Hoy</button>
				<button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Año</button>
				<button class="btn btn-warning active" data-calendar-view="month">Mes</button>
				<button class="btn btn-warning" data-calendar-view="week">Semana</button>
				<button class="btn btn-warning" data-calendar-view="day">Día</button>
			</div>
		</div>

		<h3></h3>
		<!-- <small>To see example with events navigate to march 2013</small> -->
		<a href="?ctl=altaEvento">
			<button class="btn btn-warning">Añadir Evento</button>
		</a>
		
	</div>

	<div class="row">
		<div class="col-lg-9 col-sm-9 col-xs-12">
			<div id="calendar"></div>
		</div>
		<div class="col-lg-3 col-sm-3 col-xs-12">
			<div class="row-fluid">
				<!-- <select id="first_day" class="span12">
					<option value="" selected="selected">First day of week language-dependant</option>
					<option value="2">Domingo es primer día de la semana</option>
					<option value="1">Lunes es primer día de la semana</option>
				</select> -->
				<!-- <select id="language" class="span12">
					<option value="">Select Idioma (default: en-US)</option>
					<option value="es-ES">Español</option>
				</select> -->
				<label class="checkbox">
					<input type="checkbox" value="#events-modal" id="events-in-modal"> Abrir eventos en ventana modal
				</label>
				<label class="checkbox">
					<input type="checkbox" id="format-12-hours"> Formato 12 Horas
				</label>
				<!-- <label class="checkbox">
					<input type="checkbox" id="show_wb" checked> Mostrar Semana
				</label>
				<label class="checkbox">
					<input type="checkbox" id="show_wbn" checked> Mostrar número de semana
				</label> -->
			</div>

			<h4>Eventos</h4>
			<small>This list is populated with events dynamically</small>
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>
</div>