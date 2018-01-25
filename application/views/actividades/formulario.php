<div class="col-6">
<div id="idgeneral" class="form-group">
<?= form_open("/actividades/recibirDatos")?>
<?php 
	$actividad = array(
		'name'=>'actividad',
		'placeholder'=> '   Your activity'
	);
?>
<h3>
<?= form_label('Add activity: ','actividad') ?>
</h3>
<?= form_input($actividad) ?>
<br><br>
<div id="btns">
<?= form_submit('','   Add   ') ?>
</div>
<?= form_close() ?>
</div>
</div>
</body>
</html>