<div class="container">
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
				<div class="col-xs-8 col-md-4"><b><?php echo $p."- ".$row2->descripcion?>:</b></div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" checked value="0">Si</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" value="1">No</div>
			<?php
			}
			else
			{?>
				<div class="col-xs-8 col-md-4"><b><?php echo $p."- ".$row2->descripcion?>:</b></div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" value="1">Si</div><div class="col-xs-2 col-md-1"><input type="radio" name="p<?php echo $row2->id ?>" checked value="0">No</div>
			<?php
			}
			?>
			</div>
		<?php
		$p++;
		}
	}
}
echo form_submit("save","Enviar",'class="btn btn-primary"');
echo form_close();
?>
</div>