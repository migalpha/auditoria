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
		<div class="col-xs-6 col-sm-4  col-md-3"><?php echo anchor('auditorias/cuestionario/'.$this->uri->segment(3).'/1/0','Evaluación Operativa') ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><h4><?php echo ($operativa ==0)?'<span class="label label-danger">Pendiente</span>':'<span class="label label-success">Realizado</span>' ?></h4></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-4  col-md-3"><?php echo anchor('auditorias/cuestionario/'.$this->uri->segment(3).'/2/0','Evaluación Atención al público') ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><h4><?php echo ($atencion ==0)?'<span class="label label-danger">Pendiente</span>':'<span class="label label-success">Realizado</span>' ?></h4></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-4  col-md-3"><?php echo anchor('auditorias/cuestionario/'.$this->uri->segment(3).'/3/0','Evaluación de Imagen') ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><h4><span class="label label-danger">Pendiente</span></h4></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-4  col-md-3"><?php echo anchor('auditorias/cuestionario/'.$this->uri->segment(3).'/4/0','Evaluación Inventario') ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><h4><span class="label label-danger">Pendiente</span></h4></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-4  col-md-3"><?php echo anchor('auditorias/cuestionario/'.$this->uri->segment(3).'/5/0','Evaluación Otros') ?></div>
		<div class="col-xs-6 col-sm-4 col-md-3"><h4><span class="label label-danger">Pendiente</span></h4></div>
	</div>
	<?php echo anchor('auditorias/', 'Atrás', 'class="btn btn-warning"'); ?>
</div>