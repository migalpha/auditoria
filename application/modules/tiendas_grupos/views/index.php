<div>
	<h1 class="page-header">Tiendas Grupos</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				
		<th>Codigo Grupo Base</th>
		<th>Descripcion</th>
		<th>Deleted</th>
			</tr>
		</thead>
		<tbody>
		
		<?php foreach ($records as $record) : ?>
			<?php $record = (array)$record;?>
			<tr>
			<?php foreach($record as $field => $value) : ?>
				
				<?php if ($field != 'id') : ?>
					<td>
						<?php if ($field == 'deleted'): ?>
							<?php e(($value > 0) ? lang('tiendas_grupos_true') : lang('tiendas_grupos_false')); ?>
						<?php else: ?>
							<?php e($value); ?>
						<?php endif ?>
					</td>
				<?php endif; ?>
				
			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>