<!-- ver_cerradas.php -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-10">
			<h1>Auditorías Cerradas</h1>
		</div>
	</div>

<?php if ($records): ?>
	<div class="row">
		<div class="col-xs-6 col-sm-4  col-md-3"><h3>Auditoria</h3></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><h3>Tienda</h3></div>
		<div class="hidden-xs col-sm-4 col-md-3"><h3>Fecha</h3></div>
		<div class="hidden-xs hidden-sm col-md-3"><h3>Puntaje</h3></div>
	</div>
	<?php
	foreach ($records as $row)
	{?>
	<div class="row">
		<div class="col-xs-6 col-sm-4 col-md-3"><?php echo ($row->auditoria_tipo_id==3)?anchor('/auditorias/ver_auditoria_sorpresa/'.$row->auditoria_id,$row->auditoria_id):anchor('/auditorias/ver_auditoria/'.$row->auditoria_id,$row->auditoria_id)  ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><?php echo $tiendas[$row->cod_base] ?></div>
		<div class="hidden-xs col-sm-4 col-md-3"><?php echo date_format(date_create($row->created_on), 'd-m-Y H:i:s') ?></div>
		<div class="hidden-xs hidden-sm col-md-3"><?php echo $row->puntaje ?></div>
	</div>
	<?php
	}
	?>
<?php endif ?>
</div>