<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/respuestas') ?>" id="list"><?php echo lang('respuestas_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Respuestas.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/respuestas/create') ?>" id="create_new"><?php echo lang('respuestas_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>