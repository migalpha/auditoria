<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/observaciones') ?>" id="list"><?php echo lang('observaciones_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Observaciones.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/observaciones/create') ?>" id="create_new"><?php echo lang('observaciones_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>