<div class="container">
<div class="row">
	<div class="col-xs-12 col-md-10">
		<h1>Auditorias</h1>
	</div>
	<div class="col-xs-12 col-md-2">
		<?php
			echo ($current_user->role_id == 7)? form_open('auditorias/create_sorpresa', 'class="form-horizontal"') :form_open('auditorias/create', 'class="form-horizontal"');
			echo form_submit("","Crear Nueva Auditoria",'class="btn btn-primary"');
			echo form_close();
		?>

	</div>
</div>
<?php if ($records): ?>
	

<br />
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
		<div class="col-xs-6 col-sm-4 col-md-3"><?php echo ($current_user->role_id==7)?anchor('/auditorias/ver_auditoria_sorpresa/'.$row->auditoria_id,$row->auditoria_id):anchor('/auditorias/ver_auditoria/'.$row->auditoria_id,$row->auditoria_id)  ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><?php echo $tiendas[$row->cod_base] ?></div>
		<div class="hidden-xs col-sm-4 col-md-3"><?php echo date_format(date_create($row->created_on), 'd-m-Y H:i:s') ?></div>
		<div class="hidden-xs hidden-sm col-md-3"><?php echo $row->puntaje ?></div>
	</div>
<?php
}
?>
<?php endif ?>	
</div>
