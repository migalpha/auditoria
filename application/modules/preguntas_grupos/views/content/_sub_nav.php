<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/preguntas_grupos') ?>" id="list"><?php echo lang('preguntas_grupos_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Preguntas_Grupos.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/preguntas_grupos/create') ?>" id="create_new"><?php echo lang('preguntas_grupos_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>