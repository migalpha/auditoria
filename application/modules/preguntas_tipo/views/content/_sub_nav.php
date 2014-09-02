<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/preguntas_tipo') ?>" id="list"><?php echo lang('preguntas_tipo_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Preguntas_Tipo.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/preguntas_tipo/create') ?>" id="create_new"><?php echo lang('preguntas_tipo_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>