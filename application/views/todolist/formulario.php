<?= form_open("/actividades/recibirDatos")?>
<?php 
	$actividad = array(
		'name'=>'actividad',
		'placeholder'=> 'escribe tu actividad'
	);
?>

<?= form_label('ACTIVIDAD: ','actividad') ?>
<?= form_input($actividad) ?>
<br><br>
<?= form_submit('','Agregar') ?>
<?= form_close() ?>

</body>
</html>