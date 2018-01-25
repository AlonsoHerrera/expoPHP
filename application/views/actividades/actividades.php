<style>
</style>
<div id="idgeneral2"  class="col-6">
<h3>Your activities</h3>
<ul id="idLista" class="list-group">
<?php
$this->load->helper('url');
	foreach ($actividades->result() as $actividad) {?>	
			<li class="list-group-item"> 
				<?= $actividad->actividad; ?>
				<a class="btn btn-outline-success" 
        		href="<?php echo base_url()?>index.php/actividades/borrar/<?php echo $actividad->id ?>">Delete</a>		
			</li>	
	<?php } ?>
</ul>
</div>

