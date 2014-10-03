<div class="header">
    <div class="container">
        <div class="logo">
          <a href="<?php echo site_url()?>/auditorias"><img src="<?php echo base_url()?>themes/default/images/logo.png" alt=""></a>
        </div>
        <?php if($current_user){ ?>
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="<?php echo base_url()?>themes/default/images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
              <li class="current"><?php echo anchor('/auditorias','Home'); ?></li>
              <?php if ($current_user->role_id == 1) {?><li><?php echo anchor('/admin','Administración'); ?></li><?php }?>
              <li><?php echo anchor('/users/logout',"Cerrar")?></li>
              <!--li><a href="project.html">Project</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li-->                               
              <div class="clear"></div>
            </ul>
            <script type="text/javascript" src="<?php echo base_url()?>themes/default/js/responsive-nav.js"></script>
        </div>  
        <?php }?>                        
        <div class="clearfix"> </div>
        <!----//End-top-nav---->
     </div>
</div>