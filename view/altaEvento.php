<!DOCTYPE html>
<html>
<head>
    
	<title>Crear un nuevo evento</title>
    <meta charset="utf-8">
	<head>
	  	<script src="js/jquery-1.11.2.min.js"></script>
	  	<script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
	  	<script src="js/bootstrap-datetimepicker.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
	   <script src="js/bootstrap-datetimepicker.es.js"></script>
    </head>
</head>
<body>
<div class="container">
      <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
    <ol class="breadcrumb">
        <li><a href="?ctl=cliente&act=mostrarAgenda">Agenda</a></li>
        <li><a href="?ctl=altaEvento">Añadir evento</a></li>
    </ol>
    <div class="row">
    <h1 class="text-center heading">Añadir un nuevo evento</h1><hr>
    <form action="?ctl=altaEvento" method="POST" class="event-form">
        <div class="col-sm-8 col-sm-offset-2" style="height:75px;">
           <div class='col-md-6'>
                <div class="form-group">
                    <div class='input-group date' id='from'>
                        <input type='text' name="from" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
            </div>
            <div class='col-md-6'>
                <div class="form-group">
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-sm-12 control-label">Enlace al evento</label>
                <div class="col-sm-12">
                  <input type="url" name="url" class="form-control" id="url" placeholder="Introduce una url o no">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12 control-label">Tipo de evento</label>
                <div class="col-sm-12">
                    <select class="form-control" name="class">
                        <option value="event-info">Info</option>
                        <option value="event-success">Success</option>
                        <option value="event-inverse">Inverse</option>
                        <option value="event-important">Important</option>
                        <option value="event-warning">Warning</option>
                        <option value="event-special">Special</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-12 control-label">Título</label>
                <div class="col-sm-12">
                  <input type="text" name="title" class="form-control" id="title" placeholder="Introduce un título">
                </div>
            </div>
            <div class="form-group">
                <label for="body" class="col-sm-12 control-label">Evento</label>
                <div class="col-sm-12">
                  <textarea id="body" name="event" class="form-control" rows="3"></textarea>
                </div>
            </div>

             <input style="margin-top: 10px" type="submit" class="pull-right btn btn-success" value="Guardar evento">
            </div>
        </div>
    </form>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            
        });
    </script>
</div>
</body>
</html>