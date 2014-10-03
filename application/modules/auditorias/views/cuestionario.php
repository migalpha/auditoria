<div class="container-fluid">
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
<?php 
echo form_open($this->uri->uri_string(), 'class="form-horizontal"');
echo form_hidden('id_auditoria',$this->uri->segment(3));
foreach ($categorias as $row)
{?>
	<div class="row"><div class="col-xs-12 col-md-12"><h3><?php echo $row->descripcion ?></h3></div></div>
	<?php
	$p=1;
	foreach ($preguntas as $row2)
	{	
		if($row->id ==$row2->categoria_id)
		{?>
			<div class="row show-grid">
			<?php
			if ($row2->tipo_pregunta==1)
			{?>
				<?php if($nuevo==0) 
				{?>
					<div class="col-xs-6 col-md-5"><b><?php echo $p."- ".$row2->descripcion?>:</b></div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>"  value="0">Si</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" value="1">No</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" value="na">N/A</div>
				<?php
				}
				else
				{?>
					<div class="col-xs-6 col-md-5"><b><?php echo $p."- ".$row2->descripcion?>:</b></div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" <?php echo ($respuestas[$row2->id]['valor'] == 1)?'':'checked'?> value="0">Si</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" <?php echo ($respuestas[$row2->id]['valor'] == 1)?'checked':''?> value="1">No</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" <?php echo ($respuestas[$row2->id]['valor'] == 'na')?'checked':''?> value="na">N/A</div>
				<?php
				}
				?>
			<?php
			}
			else
			{?>
				<?php if($nuevo==0) 
				{?>
					<div class="col-xs-6 col-md-5"><b><?php echo $p."- ".$row2->descripcion?>:</b></div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" value="1">Si</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>"  value="0">No</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" value="na">N/A</div>
				<?php
				}
				else
				{?>
					<div class="col-xs-6 col-md-5"><b><?php echo $p."- ".$row2->descripcion?>:</b></div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" <?php echo ($respuestas[$row2->id]['valor'] == 1)?'checked':''?> value="1">Si</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" <?php echo ($respuestas[$row2->id]['valor'] == 1)?'':'checked'?> value="0">No</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" <?php echo ($respuestas[$row2->id]['valor'] == 'na')?'checked':''?> value="na">N/A</div>
				<?php
				}
				?>
			<?php
			}
			?>
			</div>
		<?php
		$p++;
		}
	}
}?>
<div class="row"><div class="hidden-xs col-sm-12 col-md-12"><h3>Observaciones:</h3></div></div>
<div class="row show-grid">
	<div class="hidden-xs col-sm-12 col-md-8">
		<textarea class="ckeditor" name="observacion" cols="70" rows="5" id="observacion"><?php echo ($observacion)?$observacion->observacion:'' ?></textarea>
	</div>
</div>
<br>
<?php if ($current_user->role_id==7): ?>
	<div class="row">
		<div class="col-xs-8 col-sm-8 col-md-6">De una calificación del 1 al 10 cual le colocaría usted a esta evaluación:</div>
		<div class="col-xs-3 col-sm-1 col-md-2"><input type="text" name="evaluacion" value="<?php echo ($datos)?$datos->punt_audit:'' ?>"></div>
	</div>
<?php endif ?>
<?php
echo form_submit("save","Enviar",'class="btn btn-primary"');
echo form_close();
?>
</div>