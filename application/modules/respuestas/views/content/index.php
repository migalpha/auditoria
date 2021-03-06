<?php

$num_columns	= 6;
$can_delete	= $this->auth->has_permission('Respuestas.Content.Delete');
$can_edit		= $this->auth->has_permission('Respuestas.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>Respuestas</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Auditoria Id</th>
					<th>Pregunta Id</th>
					<th>Valor</th>
					<th>Puntuacion</th>
					<th>Preguntas Grupos Id</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('respuestas_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/content/respuestas/edit/' . $record->id, '<span class="icon-pencil"></span>' .  $record->auditoria_id); ?></td>
				<?php else : ?>
					<td><?php e($record->auditoria_id); ?></td>
				<?php endif; ?>
					<td><?php e($record->pregunta_id) ?></td>
					<td><?php e($record->valor) ?></td>
					<td><?php e($record->puntuacion) ?></td>
					<td><?php e($record->preguntas_grupos_id) ?></td>
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