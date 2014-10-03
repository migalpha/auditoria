<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-3">
			<h4>Auditoría: <?php echo $auditoria->auditoria_id; ?></h4>
		</div>
		<div class="col-xs-12 col-md-3">
			<h4>Tienda: <?php echo $tiendas[$auditoria->cod_base]; ?></h4>
		</div>
		<div class="col-xs-12 col-md-3">
			<h4>Fecha: <?php echo date_format(date_create($auditoria->created_on), 'd-m-Y H:i:s'); ?></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-4  col-md-3"><?php echo anchor('auditorias/cuestionario/'.$this->uri->segment(3).'/6/1','Evaluación Atención al público') ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><h4><?php echo ($atencion ==0)?'<span class="label label-danger">Pendiente</span>':'<span class="label label-success">Realizado</span>' ?></h4></div>
	</div>
	<?php echo ($current_user->role_id==8)?anchor('auditorias/ver_cerradas', 'Atrás', 'class="btn btn-warning"'):anchor('auditorias/', 'Atrás', 'class="btn btn-warning"'); ?>
	<?php echo ($atencion !=0 && $auditoria->cerrado ==0)? anchor('/auditorias/cerrar/'.$this->uri->segment(3), 'Cerrar Auditoría', 'class="btn btn-danger"'):'' ;?>
	<?php echo ($auditoria->cerrado==1)? anchor('/auditorias/exportar/'.$this->uri->segment(3), 'Exportar Auditoría', 'class="btn btn-info"'):''; ?>
</div>