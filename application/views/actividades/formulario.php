<div class="col-6">
<div id="idgeneral" class="form-group">
<?= form_open("/actividades/recibirDatos")?>
<?php 
	$actividad = array(
		'name'=>'actividad',
		'placeholder'=> '   Escribe tu actividad'
	);
?>
<h3>
<?= form_label('ACTIVIDAD: ','actividad') ?>
</h3>
<?= form_input($actividad) ?>
<br><br>
<div id="btns">
<?= form_submit('','Agregar') ?>
</div>
<?= form_close() ?>
</div>
</div>
</body>
</html>