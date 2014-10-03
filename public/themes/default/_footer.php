<?php /* if (!isset($show) || $show==true) : ?>

<hr />

<footer class="footer">
    <div class="container">
        <p>Powered by <a href="http://cibonfire.com" target="_blank">Bonfire <?php echo BONFIRE_VERSION ?></a></p>
    </div>
</footer>
<?php endif; */?>
<div class="footer">
		     <div class="footer_midle">
			   	<div class='container'>
			   	 <div class="row">
			   		<div class="col-md-4">
			   		    <ul class="social_left">
			   			  <li class="facebook"><a href="https://www.facebook.com/PerfumesFactoryOficial" target="_blank"><i class="fb"> </i></a></li>
			   			  <li class="fb_text"><h4><a href="https://www.facebook.com/PerfumesFactoryOficial" target="_blank">Dale Me Gusta en Facebook</a></h4>
			   			  	<p>Perfumes Factory</p>
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   	 </div>
		       </div>
		    </div>
		    <div class="footer_bottom">
		    	<div class="copy">
		          <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank">  w3layouts</a></p>
		       </div>
		    </div>
</div>

<div id="debug"></div>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<?php /*<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.7.2.min.js"><\/script>')</script>*/?>

<!-- This would be a good place to use a CDN version of jQueryUI if needed -->
<?php echo Assets::js(); ?>

</body>
</html>