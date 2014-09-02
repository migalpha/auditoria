<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/preguntas') ?>" id="list"><?php echo lang('preguntas_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Preguntas.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/preguntas/create') ?>" id="create_new"><?php echo lang('preguntas_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>