<?php

$num_columns	= 9;
$can_delete	= $this->auth->has_permission('Auditorias_Datos_Cliente_Secreto.Content.Delete');
$can_edit		= $this->auth->has_permission('Auditorias_Datos_Cliente_Secreto.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>Auditorias Datos Cliente Secreto</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Auditoria Id</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Ci</th>
					<th>Ciudad</th>
					<th>Telefono</th>
					<th>Fecha Audit</th>
					<th>Puntaje segun auditor</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('auditorias_datos_cliente_secreto_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/auditorias_datos_cliente_secreto/edit/' . $record->id, '<span class="icon-pencil"></span>' .  $record->auditoria_id); ?></td>
				<?php else : ?>
					<td><?php e($record->auditoria_id); ?></td>
				<?php endif; ?>
					<td><?php e($record->nombre) ?></td>
					<td><?php e($record->apellidos) ?></td>
					<td><?php e($record->ci) ?></td>
					<td><?php e($record->ciudad) ?></td>
					<td><?php e($record->telefono) ?></td>
					<td><?php e($record->fecha_audit) ?></td>
					<td><?php e($record->punt_audit) ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">No records found that match your selection.</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>