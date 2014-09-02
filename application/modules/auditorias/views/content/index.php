<?php

$num_columns	= 10;
$can_delete	= $this->auth->has_permission('Auditorias.Content.Delete');
$can_edit		= $this->auth->has_permission('Auditorias.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>auditorias</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Auditoria Id</th>
					<th>Cod Base</th>
					<th>Auditor Id</th>
					<th>Atendido Por</th>
					<th>Cargo</th>
					<th>Puntaje</th>
					<th>Deleted</th>
					<th>Created On</th>
					<th>Tipo Tienda Id</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('auditorias_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/content/auditorias/edit/' . $record->id, '<span class="icon-pencil"></span>' .  $record->auditoria_id); ?></td>
				<?php else : ?>
					<td><?php e($record->auditoria_id); ?></td>
				<?php endif; ?>
					<td><?php e($record->cod_base) ?></td>
					<td><?php e($record->auditor_id) ?></td>
					<td><?php e($record->atendido_por) ?></td>
					<td><?php e($record->cargo) ?></td>
					<td><?php e($record->puntaje) ?></td>
					<td><?php echo $record->deleted > 0 ? lang('auditorias_true') : lang('auditorias_false')?></td>
					<td><?php e($record->created_on) ?></td>
					<td><?php e($record->tipo_tienda_id) ?></td>
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